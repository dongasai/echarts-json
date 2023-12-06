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
 * 图表标线。
 *
 * 
 */
class MarkLine extends AbstractOption {



        /**
         * 
 *     
 *     图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
         * @var bool $silent
         */
         public  $silent  = false  ;

        /**
         * 标线两端的标记类型，可以是一个数组分别指定两端，也可以是单个统一指定，具体格式见 data.symbol。
         * @var string|array $symbol
         */
         public  $symbol  ;

        /**
         * 标线两端的标记大小，可以是一个数组分别指定两端，也可以是单个统一指定。
 *     注意： 这里无法像一般的 symbolSize 那样通过数组分别指定高宽。
         * @var int|array $symbolSize
         */
         public  $symbolSize  ;

        /**
         * 标线数值的精度，在显示平均值线的时候有用。
         * @var int $precision
         */
         public  $precision  = 2 ;

        /**
         * 标线的文本。
         * @var MarkLine\Label $label
         */
         public MarkLine\Label $label  ;

        /**
         * 标线的样式
         * @var MarkLine\LineStyle $lineStyle
         */
         public MarkLine\LineStyle $lineStyle  ;

        /**
         * 标线的高亮样式。
         * @var MarkLine\Emphasis $emphasis
         */
         public MarkLine\Emphasis $emphasis  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     标线的淡出样式。淡出的规则跟随所在系列。
         * @var MarkLine\Blur $blur
         */
         public MarkLine\Blur $blur  ;

        /**
         * 标线的数据数组。每个数组项可以是一个两个值的数组，分别表示线的起点和终点，每一项是一个对象，有下面几种方式指定起点或终点的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标线，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     也可以是直接通过 type 设置该标线的类型，是最大值的线还是平均线。同样的，这时候可以通过使用 valueIndex 指定维度。
 *     data: [
 *     
 *     {
 *             name: 平均线,
 *             // 支持 average, min, max
 *             type: average
 *         },
 *         {
 *             name: Y 轴值为 100 的水平线,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // 起点和终点的项会共用一个 name
 *                 name: 最小值到最大值,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: 两个坐标之间的标线,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // 固定起点的 x 像素位置，用于模拟一条指向最大值的水平线
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: 两个屏幕坐标之间的标线,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
         * @var MarkLine\Data $data
         */
         public MarkLine\Data $data  ;

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

  

}