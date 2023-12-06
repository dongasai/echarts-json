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
 * 刻度样式。
 *
 * 
 */
class AxisTick extends AbstractOption {



        /**
         * 
 *     
 *     是否显示刻度。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     分隔线之间分割的刻度数。
         * @var int $splitNumber
         */
         public  $splitNumber  = 5 ;

        /**
         * 
 *     
 *     刻度线长。支持相对半径的百分比。
         * @var int|string $length
         */
         public  $length  = 6 ;

        /**
         * 
 *     从 v5.0 开始支持
 *     
 *     
 *     
 *     刻度线与轴线的距离。
         * @var int $distance
         */
         public  $distance  = 10 ;

        /**
         * 
         * @var AxisTick\LineStyle $lineStyle
         */
         public AxisTick\LineStyle $lineStyle  ;

  

}