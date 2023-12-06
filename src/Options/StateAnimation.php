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
 * 状态切换的动画配置，支持在每个系列里设置单独针对该系列的配置。
 *
 * 
 */
class StateAnimation extends AbstractOption {



        /**
         * 状态切换的动画时长，设为 0 则关闭状态动画。
         * @var int $duration
         */
         public  $duration  = 300 ;

        /**
         * 状态切换的动画缓动。
         * @var string $easing
         */
         public  $easing  = "cubicOut"  ;

  

}