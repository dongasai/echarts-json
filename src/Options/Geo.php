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
 * 地理坐标系组件。
 *
 * 
 */
class Geo extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 是否显示地理坐标系组件。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 使用 registerMap 注册的地图名称。
 *     geoJSON 引入示例
 *     $.get(map/china_geo.json, function (chinaJson) {
 *         echarts.registerMap(china, {geoJSON: geoJson});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             geo: [{
 *                 map: china,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     也参见示例 geoJSON hexbin。
 *     如上所示，ECharts 可以使用 GeoJSON 格式的数据作为地图的轮廓，你可以获取第三方的 GeoJSON 数据注册到 ECharts 中。例如第三方资源 maps。
 *     SVG 引入示例
 *     $.get(map/topographic_map.svg, function (svg) {
 *         echarts.registerMap(topo, {svg: svg});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             geo: [{
 *                 map: topo,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     也参见示例 Flight Seatmap。
 *     如上所示，ECharts 也可以使用 SVG 格式的地图。详情参见：SVG 底图。
         * @var string $map
         */
         public  $map  = ""  ;

        /**
         * 
 *     
 *     是否开启鼠标缩放和平移漫游。默认不开启。如果只想要开启缩放或者平移，可以设置成 scale 或者 move。设置成 true 为都开启
         * @var bool|string $roam
         */
         public  $roam  = false  ;

        /**
         * 
 *     从 v5.3.0 开始支持
 *     
 *     自定义地图投影，至少需要提供project, unproject两个方法分别用来计算投影后的坐标以及计算投影前的坐标。
 *     比如墨卡托投影：
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; [point[0] / 180 * Math.PI, -Math.log(Math.tan((Math.PI / 2 + point[1] / 180 * Math.PI) / 2))],
 *             unproject: (point) =&gt; [point[0] * 180 / Math.PI, 2 * 180 / Math.PI * Math.atan(Math.exp(point[1])) - 90]
 *         }
 *     }
 *     
 *     除了我们自己实现投影公式，我们也可以使用 d3-geo 等第三方库提供的现成的投影实现：
 *     const projection = d3.geoConicEqualArea();
 *     // ...
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; projection(point),
 *             unproject: (point) =&gt; projection.invert(point)
 *         }
 *     }
 *     
 *     注：自定义投影只有在使用GeoJSON作为数据源的时候有用。
         * @var Geo\Projection $projection
         */
         public Geo\Projection $projection  ;

        /**
         * 当前视角的中心点，默认使用原始坐标（经纬度）。如果设置了projection则用投影后的坐标表示。
 *     示例：
 *     center: [115.97, 29.71]
 *     
 *     projection: {
 *         projection: (pt) =&gt; project(pt)
 *     },
 *     center: project([115.97, 29.71])
         * @var array $center
         */
         public  $center  ;

        /**
         * 这个参数用于 scale 地图的长宽比，如果设置了projection则无效。
 *     最终的 aspect 的计算方式是：geoBoundingRect.width / geoBoundingRect.height * aspectScale。
         * @var int $aspectScale
         */
         public  $aspectScale  = 0.75 ;

        /**
         * 二维数组，定义定位的左上角以及右下角分别所对应的经纬度。例如
 *     // 设置为一张完整经纬度的世界地图
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // 定位左上角经纬度
 *         [-180, 90],
 *         // 定位右下角经纬度
 *         [180, -90]
 *     ],
         * @var array $boundingCoords
         */
         public  $boundingCoords  ;

        /**
         * 当前视角的缩放比例。
         * @var int $zoom
         */
         public  $zoom  = 1 ;

        /**
         * 滚轮缩放的极限控制，通过min, max最小和最大的缩放值，默认的缩放为1。
         * @var Geo\ScaleLimit $scaleLimit
         */
         public Geo\ScaleLimit $scaleLimit  ;

        /**
         * 自定义地区的名称映射，如：
 *     {
 *         China : 中国
 *     }
         * @var array $nameMap
         */
         public  $nameMap  ;

        /**
         * 
 *     从 v4.8.0 开始支持
 *     
 *     默认是 name，针对 GeoJSON 要素的自定义属性名称，作为主键用于关联数据点和 GeoJSON 地理要素。
 *     例如：
 *     {
 *         nameProperty: NAME, // 数据点中的 name：Alabama 会关联到 GeoJSON 中 NAME 属性值为 Alabama 的地理要素{type:Feature,id:01,properties:{NAME:Alabama}, geometry: { ... }}
 *         data:[
 *             {name: Alabama, value: 4822023},
 *             {name: Alaska, value: 731449},
 *         ]
 *     }
         * @var string $nameProperty
         */
         public  $nameProperty  = "name"  ;

        /**
         * 选中模式，表示是否支持多个选中，默认关闭，支持布尔值和字符串，字符串取值可选single表示单选，或者multiple表示多选。
         * @var bool|string $selectedMode
         */
         public  $selectedMode  = false  ;

        /**
         * 图形上的文本标签，可用于说明图形的一些数据信息，比如值，名称等。
         * @var Geo\Label $label
         */
         public Geo\Label $label  ;

        /**
         * 地图区域的多边形 图形样式。
         * @var Geo\ItemStyle $itemStyle
         */
         public Geo\ItemStyle $itemStyle  ;

        /**
         * 高亮状态下的多边形和标签样式。
         * @var Geo\Emphasis $emphasis
         */
         public Geo\Emphasis $emphasis  ;

        /**
         * 选中状态下的多边形和标签样式。
         * @var Geo\Select $select
         */
         public Geo\Select $select  ;

        /**
         * 
 *     从 v5.1.0 开始支持
 *     
 *     淡出状态下的多边形和标签样式。
         * @var Geo\Blur $blur
         */
         public Geo\Blur $blur  ;

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
 *     组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为 left, center, right，组件会根据相应的位置自动对齐。
         * @var string|int $left
         */
         public  $left  = "auto"  ;

        /**
         * 
 *     
 *     组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为 top, middle, bottom，组件会根据相应的位置自动对齐。
         * @var string|int $top
         */
         public  $top  = "auto"  ;

        /**
         * 
 *     
 *     组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $right
         */
         public  $right  = "auto"  ;

        /**
         * 
 *     
 *     组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $bottom
         */
         public  $bottom  = "auto"  ;

        /**
         * layoutCenter 和 layoutSize 提供了除了 left/right/top/bottom/width/height 之外的布局手段。
 *     在使用 left/right/top/bottom/width/height 的时候，可能很难在保持地图高宽比的情况下把地图放在某个盒形区域的正中间，并且保证不超出盒形的范围。此时可以通过 layoutCenter 属性定义地图中心在屏幕中的位置，layoutSize 定义地图的大小。如下示例
 *     layoutCenter: [30%, 30%],
 *     // 如果宽高比大于 1 则宽度为 100，如果小于 1 则高度为 100，保证了不超过 100x100 的区域
 *     layoutSize: 100
 *     
 *     设置这两个值后 left/right/top/bottom/width/height 无效。
         * @var array $layoutCenter
         */
         public  $layoutCenter  ;

        /**
         * 地图的大小，见 layoutCenter。支持相对于屏幕宽高的百分比或者绝对的像素大小。
         * @var int|string $layoutSize
         */
         public  $layoutSize  ;

        /**
         * 在地图中对特定的区域配置样式。
 *     例如：
 *     regions: [{
 *         name: 广东,
 *         itemStyle: {
 *             areaColor: red,
 *             color: red
 *         }
 *     }]
 *     
 *     geo 区域的颜色也可以被 map series 所控制，参见 series-map.geoIndex。
         * @var array $regions
         */
         public  $regions  ;

        /**
         * 
 *     
 *     图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
         * @var bool $silent
         */
         public  $silent  = false  ;

        /**
         * 
 *     从 v5.1.0 开始支持
 *     
 *     本坐标系特定的 tooltip 设定。
 *     提示框组件的通用介绍：
 *     提示框组件可以设置在多种地方：
 *     
 *     可以设置在全局，即 tooltip
 *     
 *     可以设置在坐标系中，即 grid.tooltip、polar.tooltip、single.tooltip
 *     
 *     可以设置在系列中，即 series.tooltip
 *     
 *     可以设置在系列的每个数据项中，即 series.data.tooltip
         * @var Geo\Tooltip $tooltip
         */
         public Geo\Tooltip $tooltip  ;

  

}