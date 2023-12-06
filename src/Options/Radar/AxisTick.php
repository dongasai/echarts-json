<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Radar;

use EchartsJson\AbstractOption;

/**
 * 
 * 坐标轴刻度相关设置。
 *
 * 
 */
class AxisTick extends AbstractOption {



        /**
         * 
 *     
 *     是否显示坐标轴刻度。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     坐标轴刻度的长度。
         * @var int $length
         */
         public  $length  = 5 ;

        /**
         * 刻度线的样式设置。
         * @var AxisTick\LineStyle $lineStyle
         */
         public AxisTick\LineStyle $lineStyle  ;

  

}