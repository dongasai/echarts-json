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
 * 选框组件的控制按钮。
 *
 * 
 */
class Brush extends AbstractOption {



        /**
         * 使用的按钮，取值：
 *     
 *     rect：开启矩形选框选择功能。
 *     polygon：开启任意形状选框选择功能。
 *     lineX：开启横向选择功能。
 *     lineY：开启纵向选择功能。
 *     keep：切换『单选』和『多选』模式。后者可支持同时画多个选框。前者支持单击清除所有选框。
 *     clear：清空所有选框。
         * @var array $type
         */
         public  $type  ;

        /**
         * 每个按钮的 icon path。
         * @var Brush\Icon $icon
         */
         public Brush\Icon $icon  ;

        /**
         * 标题文本。
         * @var Brush\Title $title
         */
         public Brush\Title $title  ;

  

}