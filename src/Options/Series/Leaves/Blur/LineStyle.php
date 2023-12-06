<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series\Leaves\Blur;

use EchartsJson\AbstractOption;

/**
 * 
 * 定义树图边的样式。
 *
 * 
 */
class LineStyle extends AbstractOption {



        /**
         * 
 *     
 *     树图边的颜色。
         * @var string $color
         */
         public  $color  = "#ccc"  ;

        /**
         * 
 *     
 *     树图边的宽度。
         * @var int $width
         */
         public  $width  = 1.5 ;

        /**
         * 
 *     
 *     树图边的曲度。
         * @var int $curveness
         */
         public  $curveness  = 0.5 ;

        /**
         * 
 *     
 *     图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
         * @var int $shadowBlur
         */
         public  $shadowBlur  ;

        /**
         * 
 *     
 *     阴影颜色。支持的格式同color。
         * @var string $shadowColor
         */
         public  $shadowColor  ;

        /**
         * 
 *     
 *     阴影水平方向上的偏移距离。
         * @var int $shadowOffsetX
         */
         public  $shadowOffsetX  = 0 ;

        /**
         * 
 *     
 *     阴影垂直方向上的偏移距离。
         * @var int $shadowOffsetY
         */
         public  $shadowOffsetY  = 0 ;

  

}