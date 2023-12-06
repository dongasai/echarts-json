<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Graphic\Elements;

use EchartsJson\AbstractOption;

/**
 * 
 * 
 *
 * 
 */
class Style extends AbstractOption {



        /**
         * 图片的内容，可以是图片的 URL，也可以是 dataURI.
         * @var string $image
         */
         public  $image  ;

        /**
         * 图形元素的左上角在父节点坐标系（以父节点左上角为原点）中的横坐标值。
         * @var int $x
         */
         public  $x  = 0 ;

        /**
         * 图形元素的左上角在父节点坐标系（以父节点左上角为原点）中的纵坐标值。
         * @var int $y
         */
         public  $y  = 0 ;

        /**
         * 图形元素的宽度。
         * @var int $width
         */
         public  $width  = 0 ;

        /**
         * 图形元素的高度。
 *     注：关于图形元素中更多的样式设置（例如 富文本标签），参见 zrender/graphic/Displayable 中的 style 相关属性。
 *     注意，这里图形元素的样式属性名称直接源于 zrender，和 echarts label、echarts itemStyle 等处同样含义的样式属性名称或有不同。例如，有如下对应：
 *     
 *     itemStyle.color =&gt; style.fill
 *     itemStyle.borderColor =&gt; style.stroke
 *     label.color =&gt; style.textFill
 *     label.textBorderColor =&gt; style.textStroke
 *     ...
         * @var int $height
         */
         public  $height  = "0"  ;

        /**
         * 填充色。
         * @var string $fill
         */
         public  $fill  = "#000"  ;

        /**
         * 笔画颜色。
         * @var string $stroke
         */
         public  $stroke  ;

        /**
         * 笔画宽度。
         * @var int $lineWidth
         */
         public  $lineWidth  = 0 ;

        /**
         * 阴影宽度。
         * @var int $shadowBlur
         */
         public  $shadowBlur  = "undefined"  ;

        /**
         * 阴影 X 方向偏移。
         * @var int $shadowOffsetX
         */
         public  $shadowOffsetX  = "undefined"  ;

        /**
         * 阴影 Y 方向偏移。
         * @var int $shadowOffsetY
         */
         public  $shadowOffsetY  = "undefined"  ;

        /**
         * 阴影颜色。
         * @var int $shadowColor
         */
         public  $shadowColor  = "undefined"  ;

        /**
         * 不透明度。
         * @var int $opacity
         */
         public  $opacity  = 1 ;

        /**
         * 可以是一个属性名，或者一组属性名。
 *     被指定的属性，在其指发生变化时，会开启过渡动画。
 *     只可以指定本 style 下的属性。
 *     例如：
 *     {
 *         type: rect,
 *         style: {
 *             // ...
 *             // 这两个属性会开启过渡动画。
 *             transition: [mmm, ppp]
 *         }
 *     }
 *     
 *     我们这样可以指定 style 下所有属性开启过渡动画：
 *     {
 *         type: rect,
 *         style: { ... },
 *         // `style` 下所有属性开启过渡动画。
 *         transition: style,
 *     }
         * @var string|array $transition
         */
         public  $transition  = "undefined"  ;

  

}