<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series;

use EchartsJson\AbstractOption;

/**
 * 
 * 
 *
 * 
 */
class BackgroundStyle extends AbstractOption {



        /**
         * 
 *     
 *     柱条的颜色。 
 *     
 *     支持使用rgb(255,255,255)，rgba(255,255,255,1)，#fff等方式设置为纯色，也支持设置为渐变色和纹理填充，具体见option.color
         * @var string $color
         */
         public  $color  = "rgba(180, 180, 180, 0.2)"  ;

        /**
         * 
 *     
 *     柱条的描边颜色。
         * @var string $borderColor
         */
         public  $borderColor  = "#000"  ;

        /**
         * 
 *     
 *     柱条的描边宽度，默认不描边。
         * @var int $borderWidth
         */
         public  $borderWidth  = 0 ;

        /**
         * 
 *     
 *     柱条的描边类型，默认为实线，支持 dashed, dotted。
         * @var string $borderType
         */
         public  $borderType  = "solid"  ;

        /**
         * 
 *     
 *     圆角半径，单位px，支持传入数组分别指定 4 个圆角半径。
 *     如:
 *     borderRadius: 5, // 统一设置四个角的圆角大小
 *     borderRadius: [5, 5, 0, 0] //（顺时针左上，右上，右下，左下）
         * @var int|array $borderRadius
         */
         public  $borderRadius  = 0 ;

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