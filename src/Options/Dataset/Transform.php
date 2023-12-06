<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Dataset;

use EchartsJson\AbstractOption;

/**
 * 
 * 参见 数据变换教程
 *
 * 
 */
class Transform extends AbstractOption {



        /**
         * 
         * @var string $type
         */
         public  $type  = "filter"  ;

        /**
         * sort 数据转换器的“条件”。
 *     参见 数据变换教程
         * @var * $config
         */
         public  $config  ;

        /**
         * 使用 transform 时，有时候我们会配不对，显示不出来结果，并且不知道哪里错了。所以，这里提供了一个配置项 transform.print 方便 debug 。这个配置项只在开发环境中生效。如下例：
 *     option = {
 *         dataset: [{
 *             source: [ ... ]
 *         }, {
 *             transform: {
 *                 type: filter,
 *                 config: { ... }
 *                 // 配置为 `true` 后， transform 的结果
 *                 // 会被 console.log 打印出来。
 *                 print: true
 *             }
 *         }],
 *         ...
 *     }
         * @var bool $print
         */
         public  $print  = false  ;

  

}