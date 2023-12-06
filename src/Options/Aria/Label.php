<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Aria;

use EchartsJson\AbstractOption;

/**
 * 
 * 如果 aria.enabled 设置为 true，label 默认开启。开启后，会根据图表、数据、标题等情况，自动智能生成关于图表的描述，用户也可以通过配置项修改描述。
 *
 * 
 */
class Label extends AbstractOption {



        /**
         * 是否开启无障碍访问的标签生成。开启后将生成 aria-label 属性。
         * @var bool $enabled
         */
         public  $enabled  = true  ;

        /**
         * 默认采用算法自动生成图表描述，如果用户需要完全自定义，可以将这个值设为描述。如将其设置为 这是一个展示了价格走势的图表，则图表 DOM 元素的 aria-label 属性值即为该字符串。
 *     这一配置项常用于展示单个的数据并不能展示图表内容时，用户显示指定概括性描述图表的文字。例如图表是一个包含大量散点图的地图，默认的算法只能显示数据点的位置，不能从整体上传达作者的意图。这时候，可以将 description 指定为作者想表达的内容即可。
         * @var string $description
         */
         public  $description  ;

        /**
         * 对于图表的整体性描述。
         * @var Label\General $general
         */
         public Label\General $general  ;

        /**
         * 系列相关的配置项。
         * @var Label\Series $series
         */
         public Label\Series $series  ;

        /**
         * 数据相关的配置项。
         * @var Label\Data $data
         */
         public Label\Data $data  ;

  

}