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
 * 叶子节点的特殊配置，如上面的树图实例中，叶子节点和非叶子节点的标签位置不同。
 *
 * 
 */
class Leaves extends AbstractOption {



        /**
         * 描述了叶子节点所对应的文本标签的样式。
         * @var Leaves\Label $label
         */
         public Leaves\Label $label  ;

        /**
         * 树图中叶子节点的样式。
         * @var Leaves\ItemStyle $itemStyle
         */
         public Leaves\ItemStyle $itemStyle  ;

        /**
         * 叶子节点高亮状态的配置。
         * @var Leaves\Emphasis $emphasis
         */
         public Leaves\Emphasis $emphasis  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     叶子节点淡出状态的配置。
         * @var Leaves\Blur $blur
         */
         public Leaves\Blur $blur  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     叶子节点选中状态的配置。
         * @var Leaves\Select $select
         */
         public Leaves\Select $select  ;

  

}