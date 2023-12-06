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
 * 面包屑，能够显示当前节点的路径。
 *
 * 
 */
class Breadcrumb extends AbstractOption {



        /**
         * 
 *     
 *     是否显示面包屑。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     面包屑组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为 left, center, right，组件会根据相应的位置自动对齐。
         * @var string|int $left
         */
         public  $left  = "center"  ;

        /**
         * 
 *     
 *     面包屑组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为 top, middle, bottom，组件会根据相应的位置自动对齐。
         * @var string|int $top
         */
         public  $top  = "bottom"  ;

        /**
         * 
 *     
 *     面包屑组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $right
         */
         public  $right  = "auto"  ;

        /**
         * 
 *     
 *     面包屑组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $bottom
         */
         public  $bottom  = "auto"  ;

        /**
         * 
 *     
 *     面包屑的高度。
         * @var int $height
         */
         public  $height  = 22 ;

        /**
         * 
 *     
 *     当面包屑没有内容时候，设个最小宽度。
         * @var int $emptyItemWidth
         */
         public  $emptyItemWidth  = 25 ;

        /**
         *  图形样式。
         * @var Breadcrumb\ItemStyle $itemStyle
         */
         public Breadcrumb\ItemStyle $itemStyle  ;

        /**
         * 
 *     从 v5.4.0 开始支持
         * @var Breadcrumb\Emphasis $emphasis
         */
         public Breadcrumb\Emphasis $emphasis  ;

  

}