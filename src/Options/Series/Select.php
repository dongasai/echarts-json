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
class Select extends AbstractOption {



        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v5.3.0 开始支持
 *     
 *     是否可以被选中。在开启selectedMode的时候有效，可以用于关闭部分数据。
         * @var bool $disabled
         */
         public  $disabled  ;

        /**
         * 
         * @var Select\Label $label
         */
         public Select\Label $label  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     标签的视觉引导线配置。
         * @var Select\LabelLine $labelLine
         */
         public Select\LabelLine $labelLine  ;

        /**
         * 
         * @var Select\ItemStyle $itemStyle
         */
         public Select\ItemStyle $itemStyle  ;

        /**
         * 
         * @var Select\LineStyle $lineStyle
         */
         public Select\LineStyle $lineStyle  ;

        /**
         * 
         * @var Select\AreaStyle $areaStyle
         */
         public Select\AreaStyle $areaStyle  ;

        /**
         * 
         * @var Select\EndLabel $endLabel
         */
         public Select\EndLabel $endLabel  ;

  

}