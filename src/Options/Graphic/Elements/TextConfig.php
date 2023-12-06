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
class TextConfig extends AbstractOption {



        /**
         * Position of textContent.
 *     
 *     left
 *     right
 *     top
 *     bottom
 *     inside
 *     insideLeft
 *     insideRight
 *     insideTop
 *     insideBottom
 *     insideTopLeft
 *     insideTopRight
 *     insideBottomLeft
 *     insideBottomRight
 *     or like [12, 33]
 *     or like [50%, 50%]
         * @var  $position
         */
         public  $position  = "inside"  ;

        /**
         * textContent 的旋转弧度。
         * @var int $rotation
         */
         public  $rotation  ;

        /**
         * textContent 根据此矩形来布局位置。
 *     默认是节点的包围盒。
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
         * @var array $layoutRect
         */
         public  $layoutRect  ;

        /**
         * textContent 的偏移。
 *     offset 和 position 的区别是，offset 是旋转（rotation）后计算。
         * @var array $offset
         */
         public  $offset  ;

        /**
         * origin 相对于节点的包围盒。
 *     可以是百分数。
 *     如果指定为 center，则定位在包围盒中心。
 *     只有当 position and rotation 都设置时，生效。
 *     
 *     如 [12, 33]
 *     或如 [50%, 50%]
 *     center
         * @var * $origin
         */
         public  $origin  ;

        /**
         * 距离 layoutRect 的距离。
         * @var int $distance
         */
         public  $distance  = 5 ;

        /**
         * 如果 true 的话，会采用节点的 transform。
         * @var bool $local
         */
         public  $local  = false  ;

        /**
         * insideFill 可以是一个颜色字符串，或者空着。
 *     如果 textContent 是 inside，它的 fill 会按这个优先级来选取：
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     在绝大多数场景下，auto-calculated-fill 是白色。
         * @var string $insideFill
         */
         public  $insideFill  ;

        /**
         * insideStroke 可以是一个颜色字符串，或者空着。
 *     如果 textContent 是 inside，它的 stroke 会按这个优先级来选取：
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     auto-calculated-stroke 的规则是：
 *     
 *     如果
 *     (A) fill 在 style 中被指定（无论是在 textContent.style 还是 textContent.style.rich 里）
 *     或者 (B) 需要画文字的背景（无论是定义在 textContent.style 还是 textContent.style.rich 里）
 *     auto-calculated-stroke 都会为 null。
 *     
 *     
 *     否则
 *     auto-calculated-stroke 会和节点的 fill 相同，如果 fill 没有的话则为 null。
         * @var string $insideStroke
         */
         public  $insideStroke  ;

        /**
         * outsideFill 可以是一个颜色字符串，或者空着。
 *     如果 textContent 是 inside，它的 fill 会按这个优先级来选取：
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
         * @var string $outsideFill
         */
         public  $outsideFill  ;

        /**
         * outsideStroke 可以是一个颜色字符串，或者空着。
 *     如果 textContent 不是 inside，它的 stroke 会按这个优先级来选取：
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     auto-calculated-stroke 的规则是：
 *     
 *     如果
 *     (A) fill 在 style 中被指定（无论是在 textContent.style 还是 textContent.style.rich 里）
 *     或者 (B) 需要画文字的背景（无论是定义在 textContent.style 还是 textContent.style.rich 里）
 *     auto-calculated-stroke 都会为 null。
 *     
 *     
 *     否则
 *     auto-calculated-stroke 会为一个近似于白色的颜色，来区别于背景。
         * @var string $outsideStroke
         */
         public  $outsideStroke  ;

        /**
         * 如果确定文本是在节点中的话，则此可设置为 true，避免 echarts 额外猜测。
         * @var bool $inside
         */
         public  $inside  ;

  

}