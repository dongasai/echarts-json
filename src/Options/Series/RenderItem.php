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
 * custom 系列需要开发者自己提供图形渲染的逻辑。这个渲染逻辑一般命名为 renderItem。例如：
 *
 * 
 */
class RenderItem extends AbstractOption {



        /**
         * renderItem 函数的参数。
         * @var RenderItem\Arguments $arguments
         */
         public RenderItem\Arguments $arguments  ;

        /**
         * 图形元素。每个图形元素是一个 object。详细信息参见：graphic。（width\height\top\bottom 不支持）
 *     如果什么都不渲染，可以不返回任何东西。
 *     例如：
 *     // 单独一个矩形
 *     {
 *         type: rect,
 *         shape: {
 *             x: x, y: y, width: width, height: height
 *         },
 *         style: api.style()
 *     }
 *     
 *     // 一组图形元素
 *     {
 *         type: group,
 *         // 如果 diffChildrenByName 设为 true，则会使用 child.name 进行 diff，
 *         // 从而能有更好的过度动画，但是降低性能。缺省为 false。
 *         // diffChildrenByName: true,
 *         children: [{
 *             type: circle,
 *             shape: {
 *                 cx: cx, cy: cy, r: r
 *             },
 *             style: api.style()
 *         }, {
 *             type: line,
 *             shape: {
 *                 x1: x1, y1: y1, x2: x2, y2: y2
 *             },
 *             style: api.style()
 *         }]
 *     }
         * @var array $return
         */
         public  $return  ;

        /**
         * group 是唯一的可以有子节点的容器。group 可以用来整体定位一组图形元素。
 *     注意，如果其任意子节点是 null，这表示该子节点不再存在。所以，如果再次调用 setOption 时，一个子节点被设为 null，这意味着它之前对应序号的元素会被删除。如果希望一个子节点保持不变，应在新的配置项中使用 {} 表示。并且，仅当 group 的子节点在之前的 setOption 中存在时，才可以使用 null/undefined/{} 作为子节点。
         * @var RenderItem\Return_group $return_group
         */
         public RenderItem\Return_group $return_group  ;

        /**
         * 可使用 SVG PathData 做路径。
 *     可以用来画图标，或者其他各种图形，因为可以很便捷得缩放以适应给定尺寸。
 *     参见例子：
 *     icons 和 shapes。
 *     关于制定尺寸、拉伸还是平铺，参见 layout。
         * @var RenderItem\Return_path $return_path
         */
         public RenderItem\Return_path $return_path  ;

        /**
         * 
         * @var RenderItem\Return_image $return_image
         */
         public RenderItem\Return_image $return_image  ;

        /**
         * 文本块。
         * @var RenderItem\Return_text $return_text
         */
         public RenderItem\Return_text $return_text  ;

        /**
         * 矩形。
         * @var RenderItem\Return_rect $return_rect
         */
         public RenderItem\Return_rect $return_rect  ;

        /**
         * 圆。
         * @var RenderItem\Return_circle $return_circle
         */
         public RenderItem\Return_circle $return_circle  ;

        /**
         * 圆环。
         * @var RenderItem\Return_ring $return_ring
         */
         public RenderItem\Return_ring $return_ring  ;

        /**
         * 扇形。
         * @var RenderItem\Return_sector $return_sector
         */
         public RenderItem\Return_sector $return_sector  ;

        /**
         * 圆弧。
         * @var RenderItem\Return_arc $return_arc
         */
         public RenderItem\Return_arc $return_arc  ;

        /**
         * 多边形。
         * @var RenderItem\Return_polygon $return_polygon
         */
         public RenderItem\Return_polygon $return_polygon  ;

        /**
         * 折线。
         * @var RenderItem\Return_polyline $return_polyline
         */
         public RenderItem\Return_polyline $return_polyline  ;

        /**
         * 直线。
         * @var RenderItem\Return_line $return_line
         */
         public RenderItem\Return_line $return_line  ;

        /**
         * 二次或三次贝塞尔曲线。
         * @var RenderItem\Return_bezierCurve $return_bezierCurve
         */
         public RenderItem\Return_bezierCurve $return_bezierCurve  ;

  

}