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
 * 数据区域缩放。目前只支持直角坐标系的缩放。
 *
 * 
 */
class DataZoom extends AbstractOption {



        /**
         * 是否显示该工具。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 缩放和还原的标题文本。
         * @var DataZoom\Title $title
         */
         public DataZoom\Title $title  ;

        /**
         * 缩放和还原的 icon path。
         * @var DataZoom\Icon $icon
         */
         public DataZoom\Icon $icon  ;

        /**
         * 数据区域缩放 icon 样式设置。由于 icon 的文本信息只在 icon hover 时候才显示，所以文字相关的配置项请在 emphasis 下设置。
         * @var DataZoom\IconStyle $iconStyle
         */
         public DataZoom\IconStyle $iconStyle  ;

        /**
         * 
         * @var DataZoom\Emphasis $emphasis
         */
         public DataZoom\Emphasis $emphasis  ;

        /**
         * 与 dataZoom.filterMode 含义和取值相同。
         * @var string $filterMode
         */
         public  $filterMode  = "filter"  ;

        /**
         * 指定哪些 xAxis 被控制。如果缺省则控制所有的x轴。如果设置为 false 则不控制任何x轴。如果设置成 3 则控制 axisIndex 为 3 的x轴。如果设置为 [0, 3] 则控制 axisIndex 为 0 和 3 的x轴。
         * @var int|array|bool $xAxisIndex
         */
         public  $xAxisIndex  ;

        /**
         * 指定哪些 yAxis 被控制。如果缺省则控制所有的y轴。如果设置为 false 则不控制任何y轴。如果设置成 3 则控制 axisIndex 为 3 的y轴。如果设置为 [0, 3] 则控制 axisIndex 为 0 和 3 的y轴。
         * @var int|array|bool $yAxisIndex
         */
         public  $yAxisIndex  ;

        /**
         * 刷选框样式
         * @var DataZoom\BrushStyle $brushStyle
         */
         public DataZoom\BrushStyle $brushStyle  ;

  

}