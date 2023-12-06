<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\AngleAxis;

use EchartsJson\AbstractOption;

/**
 * 
 * 
 *
 * 
 */
class MinorTick extends AbstractOption {



        /**
         * 
 *     
 *     是否显示次刻度线。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 
 *     
 *     次刻度线分割数，默认会分割成 5 段
         * @var int $splitNumber
         */
         public  $splitNumber  = 5 ;

        /**
         * 
 *     
 *     次刻度线的长度。
         * @var int $length
         */
         public  $length  = 3 ;

        /**
         * 
         * @var MinorTick\LineStyle $lineStyle
         */
         public MinorTick\LineStyle $lineStyle  ;

  

}