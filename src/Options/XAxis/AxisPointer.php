<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\XAxis;

use EchartsJson\AbstractOption;

/**
 * 
 * 坐标轴指示器配置项。
 *
 * 
 */
class AxisPointer extends AbstractOption {



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

  

}