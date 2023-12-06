<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\DataZoom;

use EchartsJson\AbstractOption;

/**
 * 
 * 
 *
 * 
 */
class TextStyle extends AbstractOption {



        /**
         * 
 *     
 *     dataZoom 文字的颜色。
         * @var string $color
         */
         public  $color  = "#333"  ;

        /**
         * 
 *     
 *     dataZoom 文字字体的风格。
 *     可选：
 *     
 *     normal
 *     italic
 *     oblique
         * @var string $fontStyle
         */
         public  $fontStyle  = "normal"  ;

        /**
         * 
 *     
 *     dataZoom 文字字体的粗细。
 *     可选：
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
         * @var string|int $fontWeight
         */
         public  $fontWeight  = "normal"  ;

        /**
         * 
 *     
 *     dataZoom 文字的字体系列。
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
         * @var string $fontFamily
         */
         public  $fontFamily  = "sans-serif"  ;

        /**
         * 
 *     
 *     dataZoom 文字的字体大小。
         * @var int $fontSize
         */
         public  $fontSize  = 12 ;

        /**
         * 
 *     
 *     行高。
 *     rich 中如果没有设置 lineHeight，则会取父层级的 lineHeight。例如：
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // 没有设置 `lineHeight`，则 `lineHeight` 为 56
 *             }
 *         }
 *     }
         * @var int $lineHeight
         */
         public  $lineHeight  ;

        /**
         * 
 *     
 *     文本显示宽度。
         * @var int $width
         */
         public  $width  ;

        /**
         * 
 *     
 *     文本显示高度。
         * @var int $height
         */
         public  $height  ;

        /**
         * 
 *     
 *     文字本身的描边颜色。
         * @var string $textBorderColor
         */
         public  $textBorderColor  ;

        /**
         * 
 *     
 *     文字本身的描边宽度。
         * @var int $textBorderWidth
         */
         public  $textBorderWidth  ;

        /**
         * 
 *     
 *     
 *     文字本身的描边类型。
 *     可选：
 *     
 *     solid
 *     dashed
 *     dotted
 *     
 *     自 v5.0.0 开始，也可以是 number 或者 number 数组，用以指定线条的 dash array，配合 
 *     textBorderDashOffset
 *      可实现更灵活的虚线效果。
 *     例如：
 *     {
 *     
 *     textBorderType: [5, 10],
 *     
 *     textBorderDashOffset: 5
 *     }
         * @var string|int|array $textBorderType
         */
         public  $textBorderType  = "solid"  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     用于设置虚线的偏移量，可搭配 
 *     textBorderType
 *      指定 dash array 实现灵活的虚线效果。
 *     更多详情可以参考 MDN lineDashOffset。
         * @var int $textBorderDashOffset
         */
         public  $textBorderDashOffset  = 0 ;

        /**
         * 
 *     
 *     文字本身的阴影颜色。
         * @var string $textShadowColor
         */
         public  $textShadowColor  = "transparent"  ;

        /**
         * 
 *     
 *     文字本身的阴影长度。
         * @var int $textShadowBlur
         */
         public  $textShadowBlur  = 0 ;

        /**
         * 
 *     
 *     文字本身的阴影 X 偏移。
         * @var int $textShadowOffsetX
         */
         public  $textShadowOffsetX  = 0 ;

        /**
         * 
 *     
 *     文字本身的阴影 Y 偏移。
         * @var int $textShadowOffsetY
         */
         public  $textShadowOffsetY  = 0 ;

        /**
         * 
 *     
 *     文字超出宽度是否截断或者换行。配置width时有效
 *     
 *     truncate 截断，并在末尾显示ellipsis配置的文本，默认为...
 *     break 换行
 *     breakAll 换行，跟break不同的是，在英语等拉丁文中，breakAll还会强制单词内换行
         * @var string $overflow
         */
         public  $overflow  = "none"  ;

        /**
         * 在overflow配置为truncate的时候，可以通过该属性配置末尾显示的文本。
         * @var string $ellipsis
         */
         public  $ellipsis  = "..."  ;

  

}