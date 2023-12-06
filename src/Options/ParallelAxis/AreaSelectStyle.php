<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\ParallelAxis;

use EchartsJson\AbstractOption;

/**
 * 
 * 在坐标轴上可以进行框选，这里是一些框选的设置。
 *
 * 
 */
class AreaSelectStyle extends AbstractOption {



        /**
         * 
 *     
 *     框选范围的宽度。
         * @var int $width
         */
         public  $width  = 20 ;

        /**
         * 
 *     
 *     选框的边框宽度。
         * @var int $borderWidth
         */
         public  $borderWidth  = 1 ;

        /**
         * 
 *     
 *     选框的边框颜色。
         * @var string $borderColor
         */
         public  $borderColor  = "rgba(160,197,232)"  ;

        /**
         * 
 *     
 *     选框的填充色。
         * @var string $color
         */
         public  $color  = "rgba(160,197,232)"  ;

        /**
         * 
 *     
 *     选框的透明度。
         * @var int $opacity
         */
         public  $opacity  = 0.3 ;

  

}