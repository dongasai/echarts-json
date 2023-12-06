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
 * 坐标轴在 grid 区域中的分隔线。
 *
 * 
 */
class SplitLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示分隔线。默认数值轴显示，类目轴不显示。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
         * @var SplitLine\LineStyle $lineStyle
         */
         public SplitLine\LineStyle $lineStyle  ;

  

}