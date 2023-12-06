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
 * 仪表盘轴线相关配置。
 *
 * 
 */
class AxisLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示仪表盘轴线。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     是否在两端显示成圆形。
         * @var bool $roundCap
         */
         public  $roundCap  = false  ;

        /**
         * 仪表盘轴线样式。
         * @var AxisLine\LineStyle $lineStyle
         */
         public AxisLine\LineStyle $lineStyle  ;

  

}