<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Aria\Label\Data;

use EchartsJson\AbstractOption;

/**
 * 
 * 数据与数据之间描述的分隔符。
 *
 * 
 */
class Separator extends AbstractOption {



        /**
         * 除了最后一个数据后的分隔符。
         * @var string $middle
         */
         public  $middle  = "，"  ;

        /**
         * 最后一个数据后的分隔符。
 *     需要注意的是，通常最后一个数据后是系列的 separator.end，所以 data.separator.end 在大多数情况下为空字符串。
         * @var string $end
         */
         public  $end  = ""  ;

  

}