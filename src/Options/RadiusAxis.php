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
 * 极坐标系的径向轴。
 *
 * 
 */
class RadiusAxis extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 径向轴所在的极坐标系的索引，默认使用第一个极坐标系。
         * @var int $polarIndex
         */
         public  $polarIndex  = 0 ;

        /**
         * 坐标轴类型。
 *     可选：
 *     
 *     value
 *       数值轴，适用于连续数据。
 *     
 *     category
 *       类目轴，适用于离散的类目数据。为该类型时类目数据可自动从 series.data 或 dataset.source 中取，或者可通过 radiusAxis.data 设置类目数据。
 *     
 *     time
 *       时间轴，适用于连续的时序数据，与数值轴相比时间轴带有时间的格式化，在刻度计算上也有所不同，例如会根据跨度的范围来决定使用月，星期，日还是小时范围的刻度。
 *     
 *     log
 *       对数轴。适用于对数数据。
         * @var string $type
         */
         public  $type  = "value"  ;

        /**
         * 
 *     
 *     坐标轴名称。
         * @var string $name
         */
         public  $name  ;

        /**
         * 
 *     
 *     坐标轴名称显示位置。
 *     可选：
 *     
 *     start
 *     middle 或者 center
 *     end
         * @var string $nameLocation
         */
         public  $nameLocation  = "end"  ;

        /**
         * 坐标轴名称的文字样式。
         * @var RadiusAxis\NameTextStyle $nameTextStyle
         */
         public RadiusAxis\NameTextStyle $nameTextStyle  ;

        /**
         * 
 *     
 *     坐标轴名称与轴线之间的距离。
         * @var int $nameGap
         */
         public  $nameGap  = 15 ;

        /**
         * 
 *     
 *     坐标轴名字旋转，角度值。
         * @var int $nameRotate
         */
         public  $nameRotate  ;

        /**
         * 
 *     
 *     是否是反向坐标轴。
         * @var bool $inverse
         */
         public  $inverse  = false  ;

        /**
         * 
 *     
 *     坐标轴两边留白策略，类目轴和非类目轴的设置和表现不一样。
 *     类目轴中 boundaryGap 可以配置为 true 和 false。默认为 true，这时候刻度只是作为分隔线，标签和数据点都会在两个刻度之间的带(band)中间。
 *     非类目轴，包括时间，数值，对数轴，boundaryGap是一个两个值的数组，分别表示数据最小值和最大值的延伸范围，可以直接设置数值或者相对的百分比，在设置 min 和 max 后无效。
 *     示例：
 *     boundaryGap: [20%, 20%]
         * @var bool|array $boundaryGap
         */
         public  $boundaryGap  ;

        /**
         * 
 *     
 *     坐标轴刻度最小值。
 *     可以设置成特殊值 dataMin，此时取数据在该轴上的最小值作为最小刻度。
 *     不设置时会自动计算最小值保证坐标轴刻度的均匀分布。
 *     在类目轴中，也可以设置为类目的序数（如类目轴 data: [类A, 类B, 类C] 中，序数 2 表示 类C。也可以设置为负数，如 -3）。
 *     当设置成 function 形式时，可以根据计算得出的数据最大最小值设定坐标轴的最小值。如：
 *     min: function (value) {
 *         return value.min - 20;
 *     }
 *     
 *     其中 value 是一个包含 min 和 max 的对象，分别表示数据的最大最小值，这个函数可返回坐标轴的最小值，也可返回 null/undefined 来表示“自动计算最小值”（返回 null/undefined 从 v4.8.0 开始支持）。
         * @var int|string|callable $min
         */
         public  $min  ;

        /**
         * 
 *     
 *     坐标轴刻度最大值。
 *     可以设置成特殊值 dataMax，此时取数据在该轴上的最大值作为最大刻度。
 *     不设置时会自动计算最大值保证坐标轴刻度的均匀分布。
 *     在类目轴中，也可以设置为类目的序数（如类目轴 data: [类A, 类B, 类C] 中，序数 2 表示 类C。也可以设置为负数，如 -3）。
 *     当设置成 function 形式时，可以根据计算得出的数据最大最小值设定坐标轴的最小值。如：
 *     max: function (value) {
 *         return value.max - 20;
 *     }
 *     
 *     其中 value 是一个包含 min 和 max 的对象，分别表示数据的最大最小值，这个函数可返回坐标轴的最大值，也可返回 null/undefined 来表示“自动计算最大值”（返回 null/undefined 从 v4.8.0 开始支持）。
         * @var int|string|callable $max
         */
         public  $max  ;

        /**
         * 
 *     
 *     只在数值轴中（type: value）有效。
 *     是否是脱离 0 值比例。设置成 true 后坐标刻度不会强制包含零刻度。在双数值轴的散点图中比较有用。
 *     在设置 min 和 max 之后该配置项无效。
         * @var bool $scale
         */
         public  $scale  = false  ;

        /**
         * 
 *     
 *     坐标轴的分割段数，需要注意的是这个分割段数只是个预估值，最后实际显示的段数会在这个基础上根据分割后坐标轴刻度显示的易读程度作调整。
 *     在类目轴中无效。
         * @var int $splitNumber
         */
         public  $splitNumber  = 5 ;

        /**
         * 
 *     
 *     自动计算的坐标轴最小间隔大小。
 *     例如可以设置成1保证坐标轴分割刻度显示成整数。
 *     {
 *         minInterval: 1
 *     }
 *     
 *     只在数值轴或时间轴中（type: value 或 time）有效。
         * @var int $minInterval
         */
         public  $minInterval  = 0 ;

        /**
         * 
 *     
 *     自动计算的坐标轴最大间隔大小。
 *     例如，在时间轴（（type: time））可以设置成 3600 * 24 * 1000 保证坐标轴分割刻度最大为一天。
 *     {
 *         maxInterval: 3600 * 24 * 1000
 *     }
 *     
 *     只在数值轴或时间轴中（type: value 或 time）有效。
         * @var int $maxInterval
         */
         public  $maxInterval  ;

        /**
         * 
 *     
 *     强制设置坐标轴分割间隔。
 *     因为 splitNumber 是预估的值，实际根据策略计算出来的刻度可能无法达到想要的效果，这时候可以使用 interval 配合 min、max 强制设定刻度划分，一般不建议使用。
 *     无法在类目轴中使用。在时间轴（type: time）中需要传时间戳，在对数轴（type: log）中需要传指数值。
         * @var int $interval
         */
         public  $interval  ;

        /**
         * 
 *     
 *     对数轴的底数，只在对数轴中（type: log）有效。
         * @var int $logBase
         */
         public  $logBase  = 10 ;

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
         * @var RadiusAxis\AxisLine $axisLine
         */
         public RadiusAxis\AxisLine $axisLine  ;

        /**
         * 坐标轴刻度相关设置。
         * @var RadiusAxis\AxisTick $axisTick
         */
         public RadiusAxis\AxisTick $axisTick  ;

        /**
         * 
 *     从 v4.6.0 开始支持
 *     
 *     坐标轴次刻度线相关设置。
 *     注意：次刻度线无法在类目轴（type: category）中使用。
 *     示例：
 *     1) 函数绘图中使用次刻度线
 *     
 *     
 *     
 *     2) 在对数轴中使用次刻度线
         * @var RadiusAxis\MinorTick $minorTick
         */
         public RadiusAxis\MinorTick $minorTick  ;

        /**
         * 坐标轴刻度标签的相关设置。
         * @var RadiusAxis\AxisLabel $axisLabel
         */
         public RadiusAxis\AxisLabel $axisLabel  ;

        /**
         * 坐标轴在 grid 区域中的分隔线。
         * @var RadiusAxis\SplitLine $splitLine
         */
         public RadiusAxis\SplitLine $splitLine  ;

        /**
         * 
 *     从 v4.6.0 开始支持
 *     
 *     坐标轴在 grid 区域中的次分隔线。次分割线会对齐次刻度线 minorTick
         * @var RadiusAxis\MinorSplitLine $minorSplitLine
         */
         public RadiusAxis\MinorSplitLine $minorSplitLine  ;

        /**
         * 坐标轴在 grid 区域中的分隔区域，默认不显示。
         * @var RadiusAxis\SplitArea $splitArea
         */
         public RadiusAxis\SplitArea $splitArea  ;

        /**
         * 类目数据，在类目轴（type: category）中有效。
 *     如果没有设置 type，但是设置了 axis.data，则认为 type 是 category。
 *     如果设置了 type 是 category，但没有设置 axis.data，则 axis.data 的内容会自动从 series.data 中获取，这会比较方便。不过注意，axis.data 指明的是 category 轴的取值范围。如果不指定而是从 series.data 中获取，那么只能获取到 series.data 中出现的值。比如说，假如 series.data 为空时，就什么也获取不到。
 *     示例：
 *     // 所有类目名称列表
 *     data: [周一, 周二, 周三, 周四, 周五, 周六, 周日]
 *     // 每一项也可以是具体的配置项，此时取配置项中的 `value` 为类目名
 *     data: [{
 *         value: 周一,
 *         // 突出周一
 *         textStyle: {
 *             fontSize: 20,
 *             color: red
 *         }
 *     }, 周二, 周三, 周四, 周五, 周六, 周日]
         * @var array $data
         */
         public  $data  ;

        /**
         * 坐标轴指示器配置项。
         * @var RadiusAxis\AxisPointer $axisPointer
         */
         public RadiusAxis\AxisPointer $axisPointer  ;

        /**
         * 
 *     
 *     是否开启动画。
         * @var bool $animation
         */
         public  $animation  = true  ;

        /**
         * 是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
         * @var int $animationThreshold
         */
         public  $animationThreshold  = 2000 ;

        /**
         * 
 *     
 *     初始动画的时长，支持回调函数，可以通过每个数据返回不同的时长实现更戏剧的初始动画效果：
 *     animationDuration: function (idx) {
 *         // 越往后的数据时长越大
 *         return idx * 100;
 *     }
         * @var int|callable $animationDuration
         */
         public  $animationDuration  = 1000 ;

        /**
         * 
 *     
 *     初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
         * @var string $animationEasing
         */
         public  $animationEasing  = "cubicOut"  ;

        /**
         * 初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
 *     如下示例：
 *     animationDelay: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
         * @var int|callable $animationDelay
         */
         public  $animationDelay  = 0 ;

        /**
         * 
 *     
 *     数据更新动画的时长。
 *     支持回调函数，可以通过每个数据返回不同的时长实现更戏剧的更新动画效果：
 *     animationDurationUpdate: function (idx) {
 *         // 越往后的数据时长越大
 *         return idx * 100;
 *     }
         * @var int|callable $animationDurationUpdate
         */
         public  $animationDurationUpdate  = 300 ;

        /**
         * 
 *     
 *     数据更新动画的缓动效果。
         * @var string $animationEasingUpdate
         */
         public  $animationEasingUpdate  = "cubicInOut"  ;

        /**
         * 数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelayUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
         * @var int|callable $animationDelayUpdate
         */
         public  $animationDelayUpdate  = 0 ;

        /**
         * 半径轴所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
         * @var int $zlevel
         */
         public  $zlevel  = 0 ;

        /**
         * 半径轴组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
         * @var int $z
         */
         public  $z  = 0 ;

  

}