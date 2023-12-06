<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Grid\Tooltip;

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
 *     指示器类型。
 *     可选
 *     
 *     line 直线指示器
 *     
 *     shadow 阴影指示器
 *     
 *     none 无指示器
 *     
 *     cross 十字准星指示器。其实是种简写，表示启用两个正交的轴的 axisPointer。
         * @var string $type
         */
         public  $type  = "line"  ;

        /**
         * 指示器的坐标轴。
 *     默认情况，坐标系会自动选择显示哪个轴的 axisPointer（默认取类目轴或者时间轴）。
 *     可以是 x, y, radius, angle。
         * @var string $axis
         */
         public  $axis  = "auto"  ;

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
         * axisPointer.type 为 cross 时有效。
         * @var AxisPointer\CrossStyle $crossStyle
         */
         public AxisPointer\CrossStyle $crossStyle  ;

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
         public  $animationDurationUpdate  = 200 ;

        /**
         * 
 *     
 *     数据更新动画的缓动效果。
         * @var string $animationEasingUpdate
         */
         public  $animationEasingUpdate  = "exponentialOut"  ;

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

  

}