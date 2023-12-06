<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series\Data;

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
         * 该节点的样式。
         * @var Select\ItemStyle $itemStyle
         */
         public Select\ItemStyle $itemStyle  ;

        /**
         * 定义树图边的样式。
         * @var Select\LineStyle $lineStyle
         */
         public Select\LineStyle $lineStyle  ;

        /**
         * 
         * @var Select\Label $label
         */
         public Select\Label $label  ;

  

}