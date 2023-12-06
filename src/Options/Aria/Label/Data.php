<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Aria\Label;

use EchartsJson\AbstractOption;

/**
 * 
 * 数据相关的配置项。
 *
 * 
 */
class Data extends AbstractOption {



        /**
         * 描述中每个系列最多出现的数据个数。
         * @var int $maxCount
         */
         public  $maxCount  = 10 ;

        /**
         * 当数据全部显示时采用的描述。这一配置项不会使得数据全部显示，可以通过将 aria.data.maxCount 设置为 Number.MAX_VALUE 实现全部显示的效果。
         * @var string $allData
         */
         public  $allData  = "其数据是——"  ;

        /**
         * 当只有部分数据显示时采用的描述。其中包括模板变量：
 *     
 *     {displayCnt}：将被替换为显示的数据个数。
         * @var string $partialData
         */
         public  $partialData  = "其中，前{displayCnt}项是——"  ;

        /**
         * 如果数据有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {name}：将被替换为数据的 name；
 *     {value}：将被替换为数据的值。
         * @var string $withName
         */
         public  $withName  = "{name}的数据是{value}"  ;

        /**
         * 如果数据没有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {value}：将被替换为数据的值。
         * @var string $withoutName
         */
         public  $withoutName  = "{value}"  ;

        /**
         * 数据与数据之间描述的分隔符。
         * @var Data\Separator $separator
         */
         public Data\Separator $separator  ;

  

}