<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options;

use EchartsJson\AbstractOption;

/**
 * 
 * 标题组件，包含主标题和副标题。
 *
 * 
 */
class Title extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 
 *     
 *     是否显示标题组件。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     主标题文本，支持使用 \n 换行。
         * @var string $text
         */
         public  $text  = ""  ;

        /**
         * 主标题文本超链接。
         * @var string $link
         */
         public  $link  = ""  ;

        /**
         * 指定窗口打开主标题超链接。
 *     可选：
 *     
 *     self 当前窗口打开
 *     
 *     blank 新窗口打开
         * @var string $target
         */
         public  $target  = "blank"  ;

        /**
         * 
         * @var Title\TextStyle $textStyle
         */
         public Title\TextStyle $textStyle  ;

        /**
         * 
 *     
 *     副标题文本，支持使用 \n 换行。
         * @var string $subtext
         */
         public  $subtext  = ""  ;

        /**
         * 副标题文本超链接。
         * @var string $sublink
         */
         public  $sublink  = ""  ;

        /**
         * 指定窗口打开副标题超链接，可选：
 *     
 *     self 当前窗口打开
 *     
 *     blank 新窗口打开
         * @var string $subtarget
         */
         public  $subtarget  = "blank"  ;

        /**
         * 
         * @var Title\SubtextStyle $subtextStyle
         */
         public Title\SubtextStyle $subtextStyle  ;

        /**
         * 
 *     
 *     整体（包括 text 和 subtext）的水平对齐。
 *     可选值：auto、left、right、center。
         * @var string $textAlign
         */
         public  $textAlign  = "auto"  ;

        /**
         * 
 *     
 *     整体（包括 text 和 subtext）的垂直对齐。
 *     可选值：auto、top、bottom、middle。
         * @var string $textVerticalAlign
         */
         public  $textVerticalAlign  = "auto"  ;

        /**
         * 是否触发事件。
         * @var bool $triggerEvent
         */
         public  $triggerEvent  = false  ;

        /**
         * 
 *     
 *     标题内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
 *     使用示例：
 *     // 设置内边距为 5
 *     padding: 5
 *     // 设置上下的内边距为 5，左右的内边距为 10
 *     padding: [5, 10]
 *     // 分别设置四个方向的内边距
 *     padding: [
 *         5,  // 上
 *         10, // 右
 *         5,  // 下
 *         10, // 左
 *     ]
         * @var int|array $padding
         */
         public  $padding  = 5 ;

        /**
         * 
 *     
 *     主副标题之间的间距。
         * @var int $itemGap
         */
         public  $itemGap  = 10 ;

        /**
         * 所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
         * @var int $zlevel
         */
         public  $zlevel  = 0 ;

        /**
         * 组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
         * @var int $z
         */
         public  $z  = 2 ;

        /**
         * 
 *     
 *     title 组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为 left, center, right，组件会根据相应的位置自动对齐。
         * @var string|int $left
         */
         public  $left  = "auto"  ;

        /**
         * 
 *     
 *     title 组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为 top, middle, bottom，组件会根据相应的位置自动对齐。
         * @var string|int $top
         */
         public  $top  = "auto"  ;

        /**
         * 
 *     
 *     title 组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $right
         */
         public  $right  = "auto"  ;

        /**
         * 
 *     
 *     title 组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $bottom
         */
         public  $bottom  = "auto"  ;

        /**
         * 
 *     
 *     标题背景色，默认透明。
 *     
 *     颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)   ，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc
         * @var string $backgroundColor
         */
         public  $backgroundColor  = "transparent"  ;

        /**
         * 
 *     
 *     标题的边框颜色。支持的颜色格式同 backgroundColor。
         * @var string $borderColor
         */
         public  $borderColor  = "#ccc"  ;

        /**
         * 
 *     
 *     标题的边框线宽。
         * @var int $borderWidth
         */
         public  $borderWidth  = 0 ;

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
 *     
 *     注意：此配置项生效的前提是，设置了 show: true 以及值不为 tranparent 的背景色 backgroundColor。
         * @var int $shadowBlur
         */
         public  $shadowBlur  ;

        /**
         * 
 *     
 *     阴影颜色。支持的格式同color。
 *     注意：此配置项生效的前提是，设置了 show: true。
         * @var string $shadowColor
         */
         public  $shadowColor  ;

        /**
         * 
 *     
 *     阴影水平方向上的偏移距离。
 *     注意：此配置项生效的前提是，设置了 show: true。
         * @var int $shadowOffsetX
         */
         public  $shadowOffsetX  = 0 ;

        /**
         * 
 *     
 *     阴影垂直方向上的偏移距离。
 *     注意：此配置项生效的前提是，设置了 show: true。
         * @var int $shadowOffsetY
         */
         public  $shadowOffsetY  = 0 ;

  

}