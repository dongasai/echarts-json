<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series\MarkArea\Emphasis;

use EchartsJson\AbstractOption;

/**
 * 
 * 
 *
 * 
 */
class Label extends AbstractOption {



        /**
         * 
 *     
 *     是否显示标签。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 
 *     
 *     
 *     
 *     标签的位置。
 *     
 *     可以通过内置的语义声明位置：
 *       示例：
 *       position: top
 *     
 *       支持：top / left / right / bottom / inside / insideLeft / insideRight / insideTop / insideBottom / insideTopLeft / insideBottomLeft / insideTopRight / insideBottomRight
 *     
 *     也可以用一个数组表示相对的百分比或者绝对像素值表示标签相对于图形包围盒左上角的位置。
 *       示例：
 *       // 绝对的像素值
 *       position: [10, 10],
 *       // 相对的百分比
 *       position: [50%, 50%]
 *     
 *     
 *     
 *     参见：label position。
         * @var string|array $position
         */
         public  $position  ;

        /**
         * 
 *     
 *     距离图形元素的距离。
 *     当 position 为字符描述值（如 top、insideRight）时候有效。
 *     参见：label position。
         * @var int $distance
         */
         public  $distance  = 5 ;

        /**
         * 
 *     
 *     标签旋转。从 -90 度到 90 度。正值是逆时针。
 *     参见：label rotation。
         * @var int $rotate
         */
         public  $rotate  ;

        /**
         * 
 *     
 *     是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
         * @var array $offset
         */
         public  $offset  ;

        /**
         * 
 *     
 *     文字的颜色。
 *     如果设置为 inherit，则为视觉映射得到的颜色，如系列色。
         * @var string $color
         */
         public  $color  = "#fff"  ;

        /**
         * 
 *     
 *     文字字体的风格。
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
 *     文字字体的粗细。
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
 *     文字的字体系列。
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
         * @var string $fontFamily
         */
         public  $fontFamily  = "sans-serif"  ;

        /**
         * 
 *     
 *     文字的字体大小。
         * @var int $fontSize
         */
         public  $fontSize  = 12 ;

        /**
         * 
 *     
 *     文字水平对齐方式，默认自动。
 *     可选：
 *     
 *     left
 *     center
 *     right
 *     
 *     rich 中如果没有设置 align，则会取父层级的 align。例如：
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // 没有设置 `align`，则 `align` 为 right
 *             }
 *         }
 *     }
         * @var string $align
         */
         public  $align  ;

        /**
         * 
 *     
 *     文字垂直对齐方式，默认自动。
 *     可选：
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     rich 中如果没有设置 verticalAlign，则会取父层级的 verticalAlign。例如：
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // 没有设置 `verticalAlign`，则 `verticalAlign` 为 bottom
 *             }
 *         }
 *     }
         * @var string $verticalAlign
         */
         public  $verticalAlign  ;

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
 *     文字块背景色。
 *     可以使用颜色值，例如：#123234, red, rgba(0,23,11,0.3)。
 *     也可以直接使用图片，例如：
 *     backgroundColor: {
 *         image: xxx/xxx.png
 *         // 这里可以是图片的 URL，
 *         // 或者图片的 dataURI，
 *         // 或者 HTMLImageElement 对象，
 *         // 或者 HTMLCanvasElement 对象。
 *     }
 *     
 *     当使用图片的时候，可以使用 width 或 height 指定高宽，也可以不指定自适应。
 *     如果设置为 inherit，则为视觉映射得到的颜色，如系列色。
         * @var string|array $backgroundColor
         */
         public  $backgroundColor  = "transparent"  ;

        /**
         * 
 *     
 *     文字块边框颜色。
 *     如果设置为 inherit，则为视觉映射得到的颜色，如系列色。
         * @var string $borderColor
         */
         public  $borderColor  ;

        /**
         * 
 *     
 *     文字块边框宽度。
         * @var int $borderWidth
         */
         public  $borderWidth  = 0 ;

        /**
         * 
 *     
 *     
 *     文字块边框描边类型。
 *     可选：
 *     
 *     solid
 *     dashed
 *     dotted
 *     
 *     自 v5.0.0 开始，也可以是 number 或者 number 数组，用以指定线条的 dash array，配合 
 *     borderDashOffset
 *      可实现更灵活的虚线效果。
 *     例如：
 *     {
 *     
 *     borderType: [5, 10],
 *     
 *     borderDashOffset: 5
 *     }
         * @var string|int|array $borderType
         */
         public  $borderType  = "solid"  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     用于设置虚线的偏移量，可搭配 
 *     borderType
 *      指定 dash array 实现灵活的虚线效果。
 *     更多详情可以参考 MDN lineDashOffset。
         * @var int $borderDashOffset
         */
         public  $borderDashOffset  = 0 ;

        /**
         * 
 *     
 *     文字块的圆角。
         * @var int|array $borderRadius
         */
         public  $borderRadius  = 0 ;

        /**
         * 
 *     
 *     文字块的内边距。例如：
 *     
 *     padding: [3, 4, 5, 6]：表示 [上, 右, 下, 左] 的边距。
 *     padding: 4：表示 padding: [4, 4, 4, 4]。
 *     padding: [3, 4]：表示 padding: [3, 4, 3, 4]。
 *     
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
         * @var int|array $padding
         */
         public  $padding  = 0 ;

        /**
         * 
 *     
 *     文字块的背景阴影颜色。
         * @var string $shadowColor
         */
         public  $shadowColor  = "transparent"  ;

        /**
         * 
 *     
 *     文字块的背景阴影长度。
         * @var int $shadowBlur
         */
         public  $shadowBlur  = 0 ;

        /**
         * 
 *     
 *     文字块的背景阴影 X 偏移。
         * @var int $shadowOffsetX
         */
         public  $shadowOffsetX  = 0 ;

        /**
         * 
 *     
 *     文字块的背景阴影 Y 偏移。
         * @var int $shadowOffsetY
         */
         public  $shadowOffsetY  = 0 ;

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
 *     如果设置为 inherit，则为视觉映射得到的颜色，如系列色。
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

        /**
         * 在 rich 里面，可以自定义富文本样式。利用富文本样式，可以在标签中做出非常丰富的效果。
 *     例如：
 *     label: {
 *         // 在文本中，可以对部分文本采用 rich 中定义样式。
 *         // 这里需要在文本中使用标记符号：
 *         // `{styleName|text content text content}` 标记样式名。
 *         // 注意，换行仍是使用 \n。
 *         formatter: [
 *             {a|这段文本采用样式a},
 *             {b|这段文本采用样式b}这段用默认样式{x|这段用样式x}
 *         ].join(\n),
 *     
 *         rich: {
 *             a: {
 *                 color: red,
 *                 lineHeight: 10
 *             },
 *             b: {
 *                 backgroundColor: {
 *                     image: xxx/xxx.jpg
 *                 },
 *                 height: 40
 *             },
 *             x: {
 *                 fontSize: 18,
 *                 fontFamily: Microsoft YaHei,
 *                 borderColor: #449933,
 *                 borderRadius: 4
 *             },
 *             ...
 *         }
 *     }
 *     
 *     详情参见教程：富文本标签
         * @var Label\Rich $rich
         */
         public Label\Rich $rich  ;

  

}