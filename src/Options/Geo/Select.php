<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Geo;

use EchartsJson\AbstractOption;

/**
 * 
 * 选中状态下的多边形和标签样式。
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
         * @var Select\ItemStyle $itemStyle
         */
         public Select\ItemStyle $itemStyle  ;

  

}