<?php
/**
 * User: Hisune <hi@hisune.com>
 *
 * Auto generate PHPDoc for Echarts-PHP from option.json
 */

namespace EchartsJson;

if (!php_sapi_name() == 'cli') {
    exit('Not in cli mode.');
}

class AutoGenerate
{

    public $optionJson = '/json/option.json';


    private $anyOf = [];

    public function __construct()
    {
        $this->delTree($this->getDir());
    }

    private function delTree($dir)
    {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file") && !is_link($dir)) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    private function getDir()
    {
        return __DIR__ . '/Options';
    }



    public function generate()
    {
        $url = $this->optionJson;
        echo "start generate \n";
        try {
            echo "get json from {$url}\n";
            $json = json_decode(file_get_contents(__DIR__.$url), true);

            if ($json && is_array($json) && isset($json['option']['properties'])) {
                echo "start auto generate PHPDoc\n";
                $this->_properties($json['option']['properties']);
            } else {
                throw new \Exception('Unknown option format.');
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    protected function _properties($properties, $dir = '')
    {
        if (!$dir) {
            echo "/**\n * Class EchartsJson \n * Created by Dongasai EchartsJson AutoGenerate.\n * @package dongasai/echarts-json\n * \n";
        }


        foreach ($properties as $top => $property) {
            if (!preg_match('/^[A-Za-z]+$/', $top)) continue; // option.json mistake

            $classAttrString = '';
            $classAttrString = '';
            $top = ucfirst($top);
            echo "$top \n";
            if (isset($property['items']['anyOf']) && $property['items']['anyOf']) {
                foreach ($property['items']['anyOf'] as $any) {
                    if (isset($any['properties'])) {
                        foreach ($any['properties'] as $classPropertyName => $classProperty) {
                            $anyOfKey = $dir . '/' . $top . '/' . $classPropertyName;
                            if (!isset($this->anyOf[$anyOfKey])) {
                                $classAttrString .= $this->_attributeTemplate($classPropertyName, $classProperty, $top, $dir);
                                $this->anyOf[$anyOfKey] = true;
                            }
                        }
                        $this->_properties($any['properties'], $dir . '/' . $top);
                    }
                }
            } elseif (isset($property['properties'])) {
                foreach ($property['properties'] as $classPropertyName => $classProperty) {
                    $classAttrString .= $this->_attributeTemplate($classPropertyName, $classProperty, $top, $dir);
                }
                $this->_properties($property['properties'], $dir . '/' . $top);
            }

            $dirToWrite = $this->getDir() . $dir;
            if ($classAttrString) {
                if (!file_exists($dirToWrite)) {
                    mkdir($dirToWrite, 0700, true);
                }
                $fileToWrite = $dirToWrite . '/' . $top . '.php';
                if (!file_exists($fileToWrite)) {
                    file_put_contents($fileToWrite, $this->_classTemplate($top, $dir));
                }


                file_put_contents($fileToWrite, str_replace('//{_more_}', $classAttrString . "\n //{_more_} " , file_get_contents($fileToWrite)));
                // 类描述
                $description = isset($property['description']) ? $this->_replaceDescription($property['description'], false) . "\n *" : '';
                file_put_contents($fileToWrite, str_replace('{__description__}', $description , file_get_contents($fileToWrite)));
                // 替换掉 多余的 //{_more_}
                file_put_contents($fileToWrite, str_replace('//{_more_}',   "" , file_get_contents($fileToWrite)));

            }




            if (!$dir) {

                // 替换 顶级的内容

//                $fileToWrite =  $this->getDir() . $dir;
//                file_put_contents($fileToWrite, str_replace('//{_more_}',   "" , file_get_contents($fileToWrite)));

            }
        }

        if (!$dir) {
            echo " */\n";
        }
    }

    protected function _classTemplate($name, $dir = '')
    {
        if($name=='Rich' && $dir){
            return $this->_classRichTemplate($name,$dir);
        }
        $namespace = str_replace('/', '\\', $dir);

        return <<<PHP
<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options{$namespace};

use EchartsJson\AbstractOption;

/**
 * 
 * {__description__}
 * 
 */
class {$name} extends AbstractOption {


//{_more_}

}
PHP;
    }

    protected function _classRichTemplate($name, $dir = '')
    {
        $namespace = str_replace('/', '\\', $dir);

        return <<<PHP
<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options{$namespace};


/**
 * 
 * {__description__}
 * 
 */
class {$name} extends \EchartsJson\Options\Rich {


}
PHP;
    }


    protected function _attributeTemplate($name, $detail, $top, $dir)
    {
        if (isset($detail['default'])) {
            if (($detail['type'] == 'boolean' || in_array('boolean', $detail['type'])) && ($detail['default'] === true || $detail['default'] === false)) {
                $default = " = " . ($detail['default'] ? 'true' : 'false') . " ";
            } elseif (($detail['type'] == 'number' || in_array('number', $detail['type'])) && is_numeric($detail['default'])) {
                $default = " = " . $detail['default'] . "";
            } elseif (($detail['type'] == 'array' ||   strtolower($detail['type'][0]) =='array'  )) {
                $default = " = " . $detail['default'] . "";
//                dd($default);
            }  else {
                $default = " = \"" . str_replace("'", "\\'", trim($detail['default'], "'")) . "\" ";
            }
        } else {
            $default = "";
        }

        $detail['description'] = isset($detail['description']) ? $this->_replaceDescription($detail['description'], true, 0, 4) : '';

        if (isset($detail['type'])) {
            if (!isset($detail['properties'])) {
                if (is_array($detail['type'])) {
                    foreach ($detail['type'] as $k => $v) {
                        $detail['type'][$k] = $this->_replaceAttrType($v);
                    }
                } else if (is_string($detail['type'])) {
                    $detail['type'] = $this->_replaceAttrType($detail['type']);
                }
                $line = $this->_propertyLine($detail['type'], $name, $default, $detail['description'], $top, $dir);
            } else {
                $line = $this->_propertyLine(ltrim(str_replace('/', '\\', $top) . '\\' . ucfirst($name), '\\'), $name, $default, $detail['description'], $top, $dir);
            }
        } else {
            $line = $this->_propertyLine('mixed', $name, $default, $detail['description'], $top, $dir);
        }
//        dump($line);

        return $line;

    }

    private function _propertyLine($typeDesc, $name, $default, $description, $top, $dir)
    {
        $type = $typeDesc;
        if(is_array($typeDesc)){
            $type='';
        }
        $typeDesc = (is_array($typeDesc))?implode('|',$typeDesc):$typeDesc;
        if ($dir) {
            $file = $this->getDir() . $dir . '/' . $top . '.php';
            if (file_exists($file)) {
                $contents = file_get_contents($file);
                if (strpos($contents, ' $' . $name . ' ') > 0) {
                    return '';
                }
            }
        }
        $line =  <<<line

        /**
         * $description
         * @var $typeDesc \$$name
         */
         public $type \${$name} $default ;

line;

//        dd($line);
        return $line;
    }

    protected function _replaceAttrType($type)
    {
        $type = strtolower($type);
        switch ($type) {
            case 'numbr': // option.json mistake
            case 'number':
                $type = 'int';
                break;
            case 'object':
            case 'array':
                $type = 'array';
                break;
            case 'date':
            case 'color':
                $type = 'string';
                break;
            case 'function':
                $type = 'callable';
                break;
            case 'boolean':
                $type = 'bool';
                break;
        }

        return $type;
    }

    protected function _replaceDescription($description, $multiLine = true, $leftPad = 4, $rightPad = 0)
    {
        if ($multiLine) {
            return str_replace("\n", "\n" . str_repeat(' ', $leftPad) . " * " . str_repeat(' ', $rightPad), rtrim(str_replace(["&quot;", '&#39;', '/*', '*/'], '', strip_tags($description))));
        } else {
            $explode = explode("\n", $description);
            return rtrim(str_replace(["&quot;", '&#39;', '/*', '*/'], '', strip_tags($explode[0])));
        }
    }

}
include_once "vendor/autoload.php";
ini_set("memory_limit","1024M");
$autoGenerate = new AutoGenerate();
$autoGenerate->generate();