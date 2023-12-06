<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Aria\Label\Series;

use EchartsJson\AbstractOption;

/**
 * 
 * 当图表只包含一个系列时，采用的描述。
 *
 * 
 */
class Single extends AbstractOption {



        /**
         * 对于所有系列的整体性描述，显示在每个系列描述之前。其中包括模板变量：
 *     
 *     {seriesCount}：将被替换为系列个数，这里始终为 1。
         * @var string $prefix
         */
         public  $prefix  = ""  ;

        /**
         * 如果系列有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {seriesName}：将被替换为系列的 name；
 *     {seriesType}：将被替换为系列的类型名称，如：柱状图、 折线图 等等。
         * @var string $withName
         */
         public  $withName  = "图表类型是{seriesType}，表示{seriesName}。"  ;

        /**
         * 如果系列没有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {seriesType}：将被替换为系列的类型名称，如：柱状图、 折线图 等等。
         * @var string $withoutName
         */
         public  $withoutName  = "图表类型是{seriesType}。"  ;

  

}