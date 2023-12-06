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
 * 
 *
 * 
 */
class Projection extends AbstractOption {



        /**
         * (coord: [number, number]) =&gt; [number, number]
 *     
 *     将经纬度坐标投影为其它坐标。
         * @var callable $project
         */
         public  $project  ;

        /**
         * (point: [number, number]) =&gt; [number, number]
 *     
 *     根据投影后坐标计算投影前的经纬度坐标
         * @var callable $unproject
         */
         public  $unproject  ;

        /**
         * 该属性主要用于适配 d3-geo 中使用的 stream 接口。在引入 stream 后可以同时引入d3-geo 中实现的Antimeridian Clipping以及Adaptive Sampling算法。
 *     const projection = d3.geoProjection((x, y) =&gt; ([x, y / 0.75]))
 *         .rotate([-115, 0]);
 *     // ...
 *     series: {
 *         type: map,
 *         projection: {
 *             // project 和 unproject 依旧需要配置。
 *             project: (point) =&gt; projection(point),
 *             unproject: (point) =&gt; projection.invert(point),
 *             // 可以直接使用 d3-geo 提供的 stream 方法。
 *             stream: projection.stream
 *         }
 *     }
 *     
 *     该配置并非是必要的。
         * @var callable $stream
         */
         public  $stream  ;

  

}