<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\AxisPointer;

use EchartsJson\AbstractOption;

/**
 * 
 * 拖拽手柄，适用于触屏的环境。参见 例子。
 *
 * 
 */
class Handle extends AbstractOption {



        /**
         * 
 *     
 *     当 show 设为 true 时开启，这时显示手柄，并且 axisPointer 会一直显示。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 
 *     
 *     手柄的图标。
 *     可以通过 image://url 设置为图片，其中 URL 为图片的链接，或者 dataURI。
 *     URL 为图片链接例如：
 *     image://http://example.website/a/b.png
 *     URL 为 dataURI 例如：
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     例如：
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     参见 使用图片的例子
         * @var * $icon
         */
         public  $icon  ;

        /**
         * 
 *     
 *     手柄的尺寸，可以设置单值，如 45，也可以设置为数组：[width, height]。
         * @var int|array $size
         */
         public  $size  = 45 ;

        /**
         * 
 *     
 *     手柄与轴的距离。注意，这是手柄中心点和轴的距离。
         * @var int $margin
         */
         public  $margin  = 50 ;

        /**
         * 
 *     
 *     手柄颜色。
         * @var string $color
         */
         public  $color  = "#333"  ;

        /**
         * 
 *     
 *     手柄拖拽时触发视图更新周期，单位毫秒，调大这个数值可以改善性能，但是降低体验。
         * @var int $throttle
         */
         public  $throttle  = 40 ;

        /**
         * 
 *     
 *     图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
         * @var int $shadowBlur
         */
         public  $shadowBlur  = 3 ;

        /**
         * 
 *     
 *     阴影颜色。支持的格式同color。
         * @var string $shadowColor
         */
         public  $shadowColor  = "#aaa"  ;

        /**
         * 
 *     
 *     阴影水平方向上的偏移距离。
         * @var int $shadowOffsetX
         */
         public  $shadowOffsetX  = 2 ;

        /**
         * 
 *     
 *     阴影垂直方向上的偏移距离。
         * @var int $shadowOffsetY
         */
         public  $shadowOffsetY  = 0 ;

  

}