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
 * 图表标域，常用于标记图表中某个范围的数据，例如标出某段时间投放了广告。
 *
 * 
 */
class MarkArea extends AbstractOption {



        /**
         * 
 *     
 *     图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
         * @var bool $silent
         */
         public  $silent  = false  ;

        /**
         * 标域文本配置。
         * @var MarkArea\Label $label
         */
         public MarkArea\Label $label  ;

        /**
         * 该标域的样式。
         * @var MarkArea\ItemStyle $itemStyle
         */
         public MarkArea\ItemStyle $itemStyle  ;

        /**
         * 高亮的标域样式
         * @var MarkArea\Emphasis $emphasis
         */
         public MarkArea\Emphasis $emphasis  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     淡出的标域样式。淡出的规则跟随所在系列。
         * @var MarkArea\Blur $blur
         */
         public MarkArea\Blur $blur  ;

        /**
         * 标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间,
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
         * @var MarkArea\Data $data
         */
         public MarkArea\Data $data  ;

        /**
         * 
 *     
 *     是否开启动画。
         * @var bool $animation
         */
         public  $animation  = false  ;

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