<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series\Select;

use EchartsJson\Option;

/**
 * 
 * 
 *
 * 
 */
class EdgeLabel extends Option {



        /**
         * 是否显示标签。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 标签位置，可选：
 *     
 *     start 线的起始点。
 *     middle 线的中点。
 *     end   线的结束点。
         * @var string $position
         */
         public  $position  = "middle"  ;

        /**
         * 标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {@xxx}：数据中名为 xxx 的维度的值，如 {@product} 表示名为 product 的维度的值。
 *     {@[n]}：数据中维度 n 的值，如 {@[3]} 表示维度 3 的值，从 0 开始计数。
 *     
 *     示例：
 *     formatter: {b}: {@score}
 *     
 *     回调函数
 *     回调函数格式：
 *     (params: Object|Array) =&gt; string
 *     
 *     参数 params 是 formatter 需要的单个数据集。格式如下：
 *     {
 *         componentType: series,
 *         // 系列类型
 *         seriesType: string,
 *         // 系列在传入的 option.series 中的 index
 *         seriesIndex: number,
 *         // 系列名称
 *         seriesName: string,
 *         // 数据名，类目名
 *         name: string,
 *         // 数据在传入的 data 数组中的 index
 *         dataIndex: number,
 *         // 传入的原始数据项
 *         data: Object,
 *         // 传入的数据值。在多数系列下它和 data 相同。在一些系列下是 data 中的分量（如 map、radar 中）
 *         value: number|Array|Object,
 *         // 坐标轴 encode 映射信息，
 *         // key 为坐标轴（如 x y radius angle 等）
 *         // value 必然为数组，不会为 null/undefined，表示 dimension index 。
 *         // 其内容如：
 *         // {
 *         //     x: [2] // dimension index 为 2 的数据映射到 x 轴
 *         //     y: [0] // dimension index 为 0 的数据映射到 y 轴
 *         // }
 *         encode: Object,
 *         // 维度名列表
 *         dimensionNames: Array&lt;String&gt;,
 *         // 数据的维度 index，如 0 或 1 或 2 ...
 *         // 仅在雷达图中使用。
 *         dimensionIndex: number,
 *         // 数据图形的颜色
 *         color: string
 *     }
 *     
 *     注：encode 和 dimensionNames 的使用方式，例如：
 *     如果数据为：
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     则可这样得到 y 轴对应的 value：
 *     params.value[params.encode.y[0]]
 *     
 *     如果数据为：
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     则可这样得到 y 轴对应的 value：
 *     params.value[params.dimensionNames[params.encode.y[0]]]
         * @var string|callable $formatter
         */
         public  $formatter  ;

        /**
         * 
 *     
 *     文字的颜色。
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
         * @var string|array $backgroundColor
         */
         public  $backgroundColor  = "transparent"  ;

        /**
         * 
 *     
 *     文字块边框颜色。
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
         * @var EdgeLabel\Rich $rich
         */
         public EdgeLabel\Rich $rich  ;

  

}