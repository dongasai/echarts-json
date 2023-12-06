<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Toolbox\Feature;

use EchartsJson\AbstractOption;

/**
 * 
 * 数据视图工具，可以展现当前图表所用的数据，编辑后可以动态更新。
 *
 * 
 */
class DataView extends AbstractOption {



        /**
         * 是否显示该工具。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 
         * @var bool $title
         */
         public  $title  = "数据视图"  ;

        /**
         * 可以通过 image://url 设置为图片，其中 URL 为图片的链接，或者 dataURI。
 *     URL 为图片链接例如：
 *     image://http://example.website/a/b.png
 *     URL 为 dataURI 例如：
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     例如：
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
         * @var string $icon
         */
         public  $icon  ;

        /**
         * 数据视图 icon 样式设置。由于 icon 的文本信息只在 icon hover 时候才显示，所以文字相关的配置项请在 emphasis 下设置。
         * @var DataView\IconStyle $iconStyle
         */
         public DataView\IconStyle $iconStyle  ;

        /**
         * 
         * @var DataView\Emphasis $emphasis
         */
         public DataView\Emphasis $emphasis  ;

        /**
         * 
 *     
 *     是否不可编辑（只读）。
         * @var bool $readOnly
         */
         public  $readOnly  = false  ;

        /**
         * (option:Object) =&gt; HTMLDomElement|string
 *     
 *     自定义 dataView 展现函数，用以取代默认的 textarea 使用更丰富的数据编辑。可以返回 dom 对象或者 html 字符串。
 *     如下示例使用表格展现数据值：
 *     optionToContent: function(opt) {
 *         var axisData = opt.xAxis[0].data;
 *         var series = opt.series;
 *         var table = &lt;table style=width:100%;text-align:center&gt;&lt;tbody&gt;&lt;tr&gt;
 *                      + &lt;td&gt;时间&lt;/td&gt;
 *                      + &lt;td&gt; + series[0].name + &lt;/td&gt;
 *                      + &lt;td&gt; + series[1].name + &lt;/td&gt;
 *                      + &lt;/tr&gt;;
 *         for (var i = 0, l = axisData.length; i &lt; l; i++) {
 *             table += &lt;tr&gt;
 *                      + &lt;td&gt; + axisData[i] + &lt;/td&gt;
 *                      + &lt;td&gt; + series[0].data[i] + &lt;/td&gt;
 *                      + &lt;td&gt; + series[1].data[i] + &lt;/td&gt;
 *                      + &lt;/tr&gt;;
 *         }
 *         table += &lt;/tbody&gt;&lt;/table&gt;;
 *         return table;
 *     }
         * @var callable $optionToContent
         */
         public  $optionToContent  ;

        /**
         * (container:HTMLDomElement, option:Object) =&gt; Object
 *     
 *     在使用 optionToContent 的情况下，如果支持数据编辑后的刷新，需要自行通过该函数实现组装 option 的逻辑。
         * @var callable $contentToOption
         */
         public  $contentToOption  ;

        /**
         * 数据视图上有三个话术，默认是[数据视图, 关闭, 刷新]。
         * @var array $lang
         */
         public  $lang  = "[\'数据视图\', \'关闭\', \'刷新\']"  ;

        /**
         * 
 *     
 *     数据视图浮层背景色。
         * @var string $backgroundColor
         */
         public  $backgroundColor  = "#fff"  ;

        /**
         * 
 *     
 *     数据视图浮层文本输入区背景色。
         * @var string $textareaColor
         */
         public  $textareaColor  = "#fff"  ;

        /**
         * 
 *     
 *     数据视图浮层文本输入区边框颜色。
         * @var string $textareaBorderColor
         */
         public  $textareaBorderColor  = "#333"  ;

        /**
         * 
 *     
 *     文本颜色。
         * @var string $textColor
         */
         public  $textColor  = "#000"  ;

        /**
         * 
 *     
 *     按钮颜色。
         * @var string $buttonColor
         */
         public  $buttonColor  = "#c23531"  ;

        /**
         * 
 *     
 *     按钮文本颜色。
         * @var string $buttonTextColor
         */
         public  $buttonTextColor  = "#fff"  ;

  

}