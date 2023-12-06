<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Graphic\Elements;

use EchartsJson\AbstractOption;

/**
 * 
 * 更新属性的动画配置。
 *
 * 
 */
class UpdateAnimation extends AbstractOption {



        /**
         * 动画时长，单位 ms
         * @var int $duration
         */
         public  $duration  ;

        /**
         * 动画缓动。不同的缓动效果可以参考 缓动示例。
         * @var string $easing
         */
         public  $easing  ;

        /**
         * 动画延迟时长，单位 ms
         * @var int $delay
         */
         public  $delay  ;

  

}