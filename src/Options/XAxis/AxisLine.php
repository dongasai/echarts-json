<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\XAxis;

use EchartsJson\AbstractOption;

/**
 * 
 * 坐标轴轴线相关设置。
 *
 * 
 */
class AxisLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示坐标轴轴线。
 *     
 *     从 v5.0.0 开始，数值轴 (type: value) 默认不显示轴线，需要显式配置。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     X 轴或者 Y 轴的轴线是否在另一个轴的 0 刻度上，只有在另一个轴为数值轴且包含 0 刻度时有效。
         * @var bool $onZero
         */
         public  $onZero  = true  ;

        /**
         * 当有双轴时，可以用这个属性手动指定，在哪个轴的 0 刻度上。
         * @var int $onZeroAxisIndex
         */
         public  $onZeroAxisIndex  ;

        /**
         * 
 *     
 *     轴线两边的箭头。可以是字符串，表示两端使用同样的箭头；或者长度为 2 的字符串数组，分别表示两端的箭头。默认不显示箭头，即 none。两端都显示箭头可以设置为 arrow，只在末端显示箭头可以设置为 [none, arrow]。
         * @var string|array $symbol
         */
         public  $symbol  = "none"  ;

        /**
         * 
 *     
 *     轴线两边的箭头的大小，第一个数字表示宽度（垂直坐标轴方向），第二个数字表示高度（平行坐标轴方向）。
         * @var array $symbolSize
         */
         public  $symbolSize  = "[10, 15]"  ;

        /**
         * 
 *     
 *     轴线两边的箭头的偏移，如果是数组，第一个数字表示起始箭头的偏移，第二个数字表示末端箭头的偏移；如果是数字，表示这两个箭头使用同样的偏移。
         * @var array|int $symbolOffset
         */
         public  $symbolOffset  = "[0, 0]"  ;

        /**
         * 
         * @var AxisLine\LineStyle $lineStyle
         */
         public AxisLine\LineStyle $lineStyle  ;

  

}