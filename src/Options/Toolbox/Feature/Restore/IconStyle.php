<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Toolbox\Feature\Restore;

use EchartsJson\AbstractOption;

/**
 * 
 * 还原 icon 样式设置。由于 icon 的文本信息只在 icon hover 时候才显示，所以文字相关的配置项请在 emphasis 下设置。
 *
 * 
 */
class IconStyle extends AbstractOption {



        /**
         * 
 *     
 *     图形的颜色。
 *     
 *     支持使用rgb(255,255,255)，rgba(255,255,255,1)，#fff等方式设置为纯色，也支持设置为渐变色和纹理填充，具体见option.color
         * @var string $color
         */
         public  $color  = "none"  ;

        /**
         * 
 *     
 *     图形的描边颜色。支持的颜色格式同 color，不支持回调函数。
         * @var string $borderColor
         */
         public  $borderColor  = "#666"  ;

        /**
         * 
 *     
 *     描边线宽。为 0 时无描边。
         * @var int $borderWidth
         */
         public  $borderWidth  = 1 ;

        /**
         * 
 *     
 *     
 *     描边类型。
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
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     用于指定线段末端的绘制方式，可以是：
 *     
 *     butt: 线段末端以方形结束。
 *     round: 线段末端以圆形结束。
 *     square: 线段末端以方形结束，但是增加了一个宽度和线段相同，高度是线段厚度一半的矩形区域。
 *     
 *     默认值为 butt。 更多详情可以参考 MDN lineCap。
         * @var string $borderCap
         */
         public  $borderCap  = "butt"  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     用于设置2个长度不为0的相连部分（线段，圆弧，曲线）如何连接在一起的属性（长度为0的变形部分，其指定的末端和控制点在同一位置，会被忽略）。
 *     可以是：
 *     
 *     bevel: 在相连部分的末端填充一个额外的以三角形为底的区域， 每个部分都有各自独立的矩形拐角。
 *     round: 通过填充一个额外的，圆心在相连部分末端的扇形，绘制拐角的形状。 圆角的半径是线段的宽度。
 *     miter: 通过延伸相连部分的外边缘，使其相交于一点，形成一个额外的菱形区域。这个设置可以通过 
 *     borderMiterLimit
 *     属性看到效果。
 *     
 *     默认值为 bevel。 更多详情可以参考 MDN lineJoin。
         * @var string $borderJoin
         */
         public  $borderJoin  = "bevel"  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     用于设置斜接面限制比例。只有当 
 *     borderJoin
 *      为 miter 时，
 *     borderMiterLimit
 *      才有效。
 *     默认值为 10。负数、0、Infinity 和 NaN 均会被忽略。
 *     更多详情可以参考 MDN miterLimit。
         * @var int $borderMiterLimit
         */
         public  $borderMiterLimit  = 10 ;

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