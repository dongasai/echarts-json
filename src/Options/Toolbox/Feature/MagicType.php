<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Toolbox\Feature;

use EchartsJson\AbstractOption;

/**
 * 
 * 动态类型切换
 *
 * 
 */
class MagicType extends AbstractOption {



        /**
         * 是否显示该工具。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 启用的动态类型，包括line（切换为折线图）, bar（切换为柱状图）, stack（切换为堆叠模式）。
         * @var array $type
         */
         public  $type  ;

        /**
         * 各个类型的标题文本，可以分别配置。
         * @var MagicType\Title $title
         */
         public MagicType\Title $title  ;

        /**
         * 各个类型的 icon path，可以分别配置。
         * @var MagicType\Icon $icon
         */
         public MagicType\Icon $icon  ;

        /**
         * 动态类型切换 icon 样式设置。由于 icon 的文本信息只在 icon hover 时候才显示，所以文字相关的配置项请在 emphasis 下设置。
         * @var MagicType\IconStyle $iconStyle
         */
         public MagicType\IconStyle $iconStyle  ;

        /**
         * 
         * @var MagicType\Emphasis $emphasis
         */
         public MagicType\Emphasis $emphasis  ;

        /**
         * 各个类型的专有配置项。在切换到某类型的时候会合并相应的配置项。
         * @var MagicType\Option $option
         */
         public MagicType\Option $option  ;

        /**
         * 各个类型对应的系列的列表。
         * @var MagicType\SeriesIndex $seriesIndex
         */
         public MagicType\SeriesIndex $seriesIndex  ;

  

}