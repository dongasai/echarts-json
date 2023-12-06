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
 * graphic 是原生图形元素组件。可以支持的图形元素包括：
 *
 * 
 */
class Graphic extends AbstractOption {



        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 里面是所有图形元素的集合。
 *     注意：graphic 的标准写法是：
 *     {
 *         graphic: {
 *             elements: [
 *                 {type: rect, ...}, {type: circle, ...}, ...
 *             ]
 *         }
 *     }
 *     
 *     但是我们常常可以用简写：
 *     {
 *         graphic: {
 *             type: rect,
 *             ...
 *         }
 *     }
 *     
 *     或者：
 *     {
 *         graphic: [
 *             {type: rect, ...}, {type: circle, ...}, ...
 *         ]
 *     }
         * @var array $elements
         */
         public array $elements  ;

  

}