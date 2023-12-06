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
class LabelLayout extends AbstractOption {



        /**
         * 是否隐藏重叠的标签。
 *     下面示例演示了在关系图中开启该配置后，在缩放时可以实现自动的标签隐藏。
         * @var bool $hideOverlap
         */
         public  $hideOverlap  ;

        /**
         * 在标签重叠的时候是否挪动标签位置以防止重叠。
 *     目前支持配置为：
 *     
 *     shiftX 水平方向依次位移，在水平方向对齐时使用
 *     shiftY 垂直方向依次位移，在垂直方向对齐时使用
 *     
 *     下面是标签右对齐并配置垂直方向依次位移以防止重叠的示例。
         * @var string $moveOverlap
         */
         public  $moveOverlap  ;

        /**
         * 标签的 x 位置。支持绝对的像素值或者20%这样的相对值。
         * @var int|string $x
         */
         public  $x  ;

        /**
         * 标签的 y 位置。支持绝对的像素值或者20%这样的相对值。
         * @var int|string $y
         */
         public  $y  ;

        /**
         * 标签在 x 方向上的像素偏移。可以和x一起使用。
         * @var int $dx
         */
         public  $dx  ;

        /**
         * 标签在 y 方向上的像素偏移。可以和y一起使用
         * @var int $dy
         */
         public  $dy  ;

        /**
         * 标签旋转角度。
         * @var int $rotate
         */
         public  $rotate  ;

        /**
         * 标签显示的宽度。可以配合overflow使用控制标签显示在固定宽度内
         * @var int $width
         */
         public  $width  ;

        /**
         * 标签显示的高度。
         * @var int $height
         */
         public  $height  ;

        /**
         * 标签水平对齐方式。可以设置left, center, right。
         * @var string $align
         */
         public  $align  ;

        /**
         * 标签垂直对齐方式。可以设置top, middle, bottom。
         * @var string $verticalAlign
         */
         public  $verticalAlign  ;

        /**
         * The text size of the label.
         * @var int $fontSize
         */
         public  $fontSize  ;

        /**
         * 标签是否可以允许用户通过拖拽二次调整位置。
         * @var bool $draggable
         */
         public  $draggable  ;

        /**
         * 标签引导线三个点的位置。格式为：
 *     [[x, y], [x, y], [x, y]]
 *     
 *     在饼图中常用来微调已经计算好的引导线，其它情况一般不建议设置。
         * @var array $labelLinePoints
         */
         public  $labelLinePoints  ;

  

}