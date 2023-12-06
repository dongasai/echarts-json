<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\AxisPointer;

use EchartsJson\AbstractOption;

/**
 * 
 * axisPointer.type 为 shadow 时有效。
 *
 * 
 */
class ShadowStyle extends AbstractOption {



        /**
         * 
 *     
 *     填充的颜色。
 *     
 *     支持使用rgb(255,255,255)，rgba(255,255,255,1)，#fff等方式设置为纯色，也支持设置为渐变色和纹理填充，具体见option.color
         * @var string $color
         */
         public  $color  = "rgba(150,150,150,0.3)"  ;

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

        /**
         * 
 *     
 *     图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
         * @var int $opacity
         */
         public  $opacity  = 1 ;

  

}