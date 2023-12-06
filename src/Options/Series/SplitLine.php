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
 * 分隔线样式。
 *
 * 
 */
class SplitLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示分隔线。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     
 *     分隔线线长。支持相对半径的百分比。
         * @var int|string $length
         */
         public  $length  = 10 ;

        /**
         * 
 *     从 v5.0 开始支持
 *     
 *     
 *     
 *     分隔线与轴线的距离。
         * @var int $distance
         */
         public  $distance  = 10 ;

        /**
         * 
         * @var SplitLine\LineStyle $lineStyle
         */
         public SplitLine\LineStyle $lineStyle  ;

  

}