<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options;

use EchartsJson\AbstractOption;

/**
 * 
 * 雷达图坐标系组件，只适用于雷达图。该组件等同 ECharts 2 中的 polar 组件。因为 3 中的 polar 被重构为标准的极坐标组件，为避免混淆，雷达图使用 radar 组件作为其坐标系。
 *
 * 
 */
class Radar extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
         * @var int $zlevel
         */
         public  $zlevel  = 0 ;

        /**
         * 组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
         * @var int $z
         */
         public  $z  = 2 ;

        /**
         * 
 *     
 *     的中心（圆心）坐标，数组的第一项是横坐标，第二项是纵坐标。
 *     支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度。
 *     使用示例：
 *     // 设置成绝对的像素值
 *     center: [400, 300]
 *     // 设置成相对的百分比
 *     center: [50%, 50%]
         * @var array $center
         */
         public  $center  = "[\'50%\', \'50%\']"  ;

        /**
         * 
 *     
 *     的半径。可以为如下类型：
 *     
 *     number：直接指定外半径值。
 *     string：例如，20%，表示外半径为可视区尺寸（容器高宽中较小一项）的 20% 长度。
 *     
 *     
 *     Array.&lt;number|string&gt;：数组的第一项是内半径，第二项是外半径。每一项遵从上述 number string 的描述。
         * @var int|string|array $radius
         */
         public  $radius  = "75%"  ;

        /**
         * 坐标系起始角度，也就是第一个指示器轴的角度。
         * @var int $startAngle
         */
         public  $startAngle  = 90 ;

        /**
         * 雷达图每个指示器名称的配置项。
         * @var Radar\AxisName $axisName
         */
         public Radar\AxisName $axisName  ;

        /**
         * 
 *     
 *     指示器名称和指示器轴的距离。
         * @var int $nameGap
         */
         public  $nameGap  = 15 ;

        /**
         * 
 *     
 *     指示器轴的分割段数。
         * @var int $splitNumber
         */
         public  $splitNumber  = 5 ;

        /**
         * 
 *     
 *     雷达图绘制类型，支持 polygon 和 circle。
         * @var string $shape
         */
         public  $shape  = "polygon"  ;

        /**
         * 
 *     
 *     是否是脱离 0 值比例。设置成 true 后坐标刻度不会强制包含零刻度。在双数值轴的散点图中比较有用。
         * @var bool $scale
         */
         public  $scale  = false  ;

        /**
         * 坐标轴是否是静态无法交互。
         * @var bool $silent
         */
         public  $silent  = false  ;

        /**
         * 坐标轴的标签是否响应和触发鼠标事件，默认不响应。
 *     事件参数如下：
 *     {
 *         // 组件类型，xAxis, yAxis, radiusAxis, angleAxis
 *         // 对应组件类型都会有一个属性表示组件的 index，例如 xAxis 就是 xAxisIndex
 *         componentType: string,
 *         // 未格式化过的刻度值, 点击刻度标签有效
 *         value: ,
 *         // 坐标轴名称, 点击坐标轴名称有效
 *         name: 
 *     }
         * @var bool $triggerEvent
         */
         public  $triggerEvent  = false  ;

        /**
         * 坐标轴轴线相关设置。
         * @var Radar\AxisLine $axisLine
         */
         public Radar\AxisLine $axisLine  ;

        /**
         * 坐标轴刻度相关设置。
         * @var Radar\AxisTick $axisTick
         */
         public Radar\AxisTick $axisTick  ;

        /**
         * 坐标轴刻度标签的相关设置。
         * @var Radar\AxisLabel $axisLabel
         */
         public Radar\AxisLabel $axisLabel  ;

        /**
         * 坐标轴在 grid 区域中的分隔线。
         * @var Radar\SplitLine $splitLine
         */
         public Radar\SplitLine $splitLine  ;

        /**
         * 坐标轴在 grid 区域中的分隔区域，默认不显示。
         * @var Radar\SplitArea $splitArea
         */
         public Radar\SplitArea $splitArea  ;

        /**
         * 雷达图的指示器，用来指定雷达图中的多个变量（维度），如下示例。
 *     indicator: [
 *        { name: 销售（sales）, max: 6500},
 *        { name: 管理（Administration）, max: 16000, color: red}, // 标签设置为红色
 *        { name: 信息技术（Information Techology）, max: 30000},
 *        { name: 客服（Customer Support）, max: 38000},
 *        { name: 研发（Development）, max: 52000},
 *        { name: 市场（Marketing）, max: 25000}
 *     ]
         * @var array $indicator
         */
         public  $indicator  ;

  

}