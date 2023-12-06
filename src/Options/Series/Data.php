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
 * series-tree.data 的数据格式是树状结构的，例如：
 *
 * 
 */
class Data extends AbstractOption {



        /**
         * 树节点的名称，用来标识每一个节点。
         * @var string $name
         */
         public  $name  ;

        /**
         * 节点的值，在 tooltip 中显示。
         * @var int $value
         */
         public  $value  ;

        /**
         * 节点初始化是否折叠。
         * @var bool $collapsed
         */
         public  $collapsed  ;

        /**
         * 该节点的样式。
         * @var Data\ItemStyle $itemStyle
         */
         public Data\ItemStyle $itemStyle  ;

        /**
         * 该节点对应的边的样式。
         * @var Data\LineStyle $lineStyle
         */
         public Data\LineStyle $lineStyle  ;

        /**
         * 该节点的标签。
         * @var Data\Label $label
         */
         public Data\Label $label  ;

        /**
         * 节点高亮状态的配置。
         * @var Data\Emphasis $emphasis
         */
         public Data\Emphasis $emphasis  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     节点淡出状态的配置。
         * @var Data\Blur $blur
         */
         public Data\Blur $blur  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     节点选中状态的配置。
         * @var Data\Select $select
         */
         public Data\Select $select  ;

        /**
         * 本系列每个数据项中特定的 tooltip 设定。
         * @var Data\Tooltip $tooltip
         */
         public Data\Tooltip $tooltip  ;

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
         public  $animationEasing  = "linear"  ;

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