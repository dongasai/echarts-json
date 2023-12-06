<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Series\MarkPoint;

use EchartsJson\AbstractOption;

/**
 * 
 * 标注的高亮样式。
 *
 * 
 */
class Emphasis extends AbstractOption {



        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v5.3.0 开始支持
 *     
 *     是否关闭高亮状态。
 *     关闭高亮状态可以在鼠标移到图形上，tooltip 触发，或者图例联动的时候不再触发高亮效果。在图形非常多的时候可以关闭以提升交互流畅性。
         * @var bool $disabled
         */
         public  $disabled  ;

        /**
         * 
         * @var Emphasis\Label $label
         */
         public Emphasis\Label $label  ;

        /**
         * 
         * @var Emphasis\ItemStyle $itemStyle
         */
         public Emphasis\ItemStyle $itemStyle  ;

  

}