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
 * 系列相关的配置项。
 *
 * 
 */
class Series extends AbstractOption {



        /**
         * 描述中最多出现的系列个数。
         * @var int $maxCount
         */
         public  $maxCount  = 10 ;

        /**
         * 当图表只包含一个系列时，采用的描述。
         * @var Series\Single $single
         */
         public Series\Single $single  ;

        /**
         * 当图表只包含多个系列时，采用的描述。
         * @var Series\Multiple $multiple
         */
         public Series\Multiple $multiple  ;

  

}