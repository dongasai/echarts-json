<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Aria;

use EchartsJson\AbstractOption;

/**
 * 
 * 为系列数据增加贴花纹理，作为颜色的辅助，帮助区分数据。使用默认贴花图案的方式非常简单，只需要开启即可：
 *
 * 
 */
class Decal extends AbstractOption {



        /**
         * 是否显示贴花图案，默认不显示。如果要显示贴花，需要保证 aria.enabled 与 aria.decal.show 都是 true。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 贴花图案的样式。如果是 Object 类型，表示为所有数据采用同样的样式，如果是数组，则数组的每一项各为一种样式，数据将会依次循环取数组中的样式。
         * @var Decal\Decals $decals
         */
         public Decal\Decals $decals  ;

  

}