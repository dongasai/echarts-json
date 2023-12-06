<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Calendar;

use EchartsJson\AbstractOption;

/**
 * 
 * 设置日历坐标分隔线的样式。
 *
 * 
 */
class SplitLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示分隔线。默认显示。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
         * @var SplitLine\LineStyle $lineStyle
         */
         public SplitLine\LineStyle $lineStyle  ;

  

}