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
class Shape extends AbstractOption {



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
         * @var int $height
         */
         public  $height  = "0"  ;

        /**
         * 可以用于设置圆角矩形。r: [r1, r2, r3, r4]，
 *     左上、右上、右下、左下角的半径依次为r1、r2、r3、r4。
 *     可以缩写，例如：
 *     
 *     r 缩写为 1         相当于 [1, 1, 1, 1]
 *     r 缩写为 [1]       相当于 [1, 1, 1, 1]
 *     r 缩写为 [1, 2]    相当于 [1, 2, 1, 2]
 *     r 缩写为 [1, 2, 3]1 相当于[1, 2, 3, 2]`
         * @var array $r
         */
         public  $r  ;

        /**
         * 可以是一个属性名，或者一组属性名。
 *     被指定的属性，在其指发生变化时，会开启过渡动画。
 *     只可以指定本 shape 下的属性。
 *     例如：
 *     {
 *         type: rect,
 *         shape: {
 *             // ...
 *             // 这两个属性会开启过渡动画。
 *             transition: [mmm, ppp]
 *         }
 *     }
 *     
 *     我们这样可以指定 shape 下所有属性开启过渡动画：
 *     {
 *         type: rect,
 *         shape: { ... },
 *         // `shape` 下所有属性开启过渡动画。
 *         transition: shape,
 *     }
         * @var string|array $transition
         */
         public  $transition  = "undefined"  ;

  

}