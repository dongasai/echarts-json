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
 * 这是坐标轴指示器（axisPointer）的全局公用设置。
 *
 * 
 */
class AxisPointer extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 
 *     
 *     默认不显示。但是如果 tooltip.trigger 设置为 axis 或者 tooltip.axisPointer.type 设置为 cross，则自动显示 axisPointer。坐标系会自动选择显示显示哪个轴的 axisPointer，也可以使用 tooltip.axisPointer.axis 改变这种选择。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 
 *     
 *     指示器类型。
 *     可选
 *     
 *     line 直线指示器
 *     
 *     shadow 阴影指示器
 *     
 *     none 无指示器
         * @var string $type
         */
         public  $type  = "line"  ;

        /**
         * 坐标轴指示器是否自动吸附到点上。默认自动判断。
 *     这个功能在数值轴和时间轴上比较有意义，可以自动寻找细小的数值点。
         * @var bool $snap
         */
         public  $snap  ;

        /**
         * 坐标轴指示器的 z 值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
         * @var int $z
         */
         public  $z  ;

        /**
         * 坐标轴指示器的文本标签。
         * @var AxisPointer\Label $label
         */
         public AxisPointer\Label $label  ;

        /**
         * axisPointer.type 为 line 时有效。
         * @var AxisPointer\LineStyle $lineStyle
         */
         public AxisPointer\LineStyle $lineStyle  ;

        /**
         * axisPointer.type 为 shadow 时有效。
         * @var AxisPointer\ShadowStyle $shadowStyle
         */
         public AxisPointer\ShadowStyle $shadowStyle  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v5.4.3 开始支持
 *     
 *     是否触发系列强调功能。
         * @var bool $triggerEmphasis
         */
         public  $triggerEmphasis  = true  ;

        /**
         * 
 *     
 *     是否触发 tooltip。如果不想触发 tooltip 可以关掉。
         * @var bool $triggerTooltip
         */
         public  $triggerTooltip  = true  ;

        /**
         * 当前的 value。在使用 axisPointer.handle 时，可以设置此值进行初始值设定，从而决定 axisPointer 的初始位置。
         * @var int $value
         */
         public  $value  ;

        /**
         * 
 *     
 *     当前的状态，可取值为 show 和 hide。
         * @var bool $status
         */
         public  $status  ;

        /**
         * 拖拽手柄，适用于触屏的环境。参见 例子。
         * @var AxisPointer\Handle $handle
         */
         public AxisPointer\Handle $handle  ;

        /**
         * 不同轴的 axisPointer 可以进行联动，在这里设置。联动表示轴能同步一起活动。轴依据他们的 axisPointer 当前对应的值来联动。
 *     联动的效果可以看这两个例子：例子A，例子B。
 *     link 是一个数组，其中每一项表示一个 link group，一个 group 中的坐标轴互相联动。例如：
 *     link: [
 *         {
 *             // 表示所有 xAxisIndex 为 0、3、4 和 yAxisName 为 someName 的坐标轴联动。
 *             xAxisIndex: [0, 3, 4],
 *             yAxisName: someName
 *         },
 *         {
 *             // 表示左右 xAxisId 为 aa、cc 以及所有的 angleAxis 联动。
 *             xAxisId: [aa, cc],
 *             angleAxis: all
 *         },
 *         ...
 *     ]
 *     
 *     如上所示，每个 link group 中可以用这些方式引用坐标轴：
 *     {
 *         // 以下的 some 均表示轴的维度，也就是表示 x, y, radius, angle, single
 *         someAxisIndex: [...], // 可以是一个数组或单值或 all
 *         someAxisName: [...],  // 可以是一个数组或单值或 all
 *         someAxisId: [...],    // 可以是一个数组或单值或 all
 *     }
 *     
 *     
 *     如何联动不同类型（axis.type）的轴？
 *     如果 axis 的类型不同，比如 axisA type 为 category，axisB type 为 time，可以在每个 link group 中写转换函数（mapper）来进行值的转换，例如：
 *     link: [{
 *         xAxisIndex: [0, 1],
 *         yAxisName: [yy],
 *         mapper: function (sourceVal, sourceAxisInfo, targetAxisInfo) {
 *             if (sourceAxisInfo.axisName === yy) {
 *                 // from timestamp to 2012-02-05
 *                 return echarts.time.format(yyyy-MM-dd, sourceVal);
 *             }
 *             else if (targetAxisInfo.axisName === yy) {
 *                 // from 2012-02-05 to date
 *                 return echarts.time.parse(dates[sourceVal]);
 *             }
 *             else {
 *                 return sourceVal;
 *             }
 *         }
 *     }]
 *     
 *     mapper 的输入参数：
 *     {number} sourceVal
 *     {Object} sourceAxisInfo 里面包含 {axisDim, axisId, axisName, axisIndex} 等信息
 *     {Object} targetAxisInfo 里面包含 {axisDim, axisId, axisName, axisIndex} 等信息
 *     mapper 的返回值：
 *     {number} 转换结果
         * @var array $link
         */
         public  $link  ;

        /**
         * 
 *     
 *     提示框触发的条件，可选：
 *     
 *     mousemove
 *       鼠标移动时触发。
 *     
 *     click
 *       鼠标点击时触发。
 *     
 *     none
 *       不在 mousemove 或 click 时触发。
         * @var string $triggerOn
         */
         public  $triggerOn  = "mousemove|click"  ;

  

}