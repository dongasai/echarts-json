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
class UniversalTransition extends AbstractOption {



        /**
         * 是否开启全局过渡动画。
         * @var bool $enabled
         */
         public  $enabled  = false  ;

        /**
         * seriesKey决定了如何关联需要动画的系列，未配置时会默认取系列的id。
 *     通常该配置为一个字符串，配置为相同seriesKey的系列之间会进行动画的过渡。也可以像下面配置为一个数组：
 *     seriesKey: [male, female]
 *     
 *     配置为数组意味着在动画的时候所有数组项指定的系列会合并为当前系列。比如该配置是指id或者seriesKey为male和female的系列会合并成当前系列。
         * @var string|array $seriesKey
         */
         public  $seriesKey  ;

        /**
         * divideShape决定在一对多或者多对一的动画中，当前系列的图形如何分裂成多个图形。目前支持
 *     
 *     split 通过一定的算法将分割图形成为多个。
 *     clone 从当前图形克隆得到多个。
 *     
 *     为了较好的效果，不同的系列会默认有不同的配置，比如散点图这种图形比较小且复杂的默认采用了clone，而柱状图这种更加规则的则默认是split。你可以根据你自己的场景需求设置为需要的分裂策略。
         * @var string $divideShape
         */
         public  $divideShape  ;

        /**
         * (index: number, count: number) =&gt; number
 *     
 *     配置一对多或者多对一的动画中每个图形的动画延时，设置不同的动画延时可以给动画带来一定的趣味性。比如下面代码每个图形通过一个随机的延时造成一种错落的效果：
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
         * @var callable $delay
         */
         public  $delay  ;

  

}