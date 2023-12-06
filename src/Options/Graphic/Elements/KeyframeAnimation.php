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
 * 关键帧动画配置。支持配置为数组同时使用多个关键帧动画。
 *
 * 
 */
class KeyframeAnimation extends AbstractOption {



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

        /**
         * 是否循环播放动画。
         * @var bool $loop
         */
         public  $loop  ;

        /**
         * 动画的关键帧。数组中每一项为一个关键帧，格式如下：
 *     interface Keyframe {
 *         // 关键帧位置。0 为第一帧，1 为最后一帧
 *         // 关键帧时间为 percent * duration + delay
 *         percent: number
 *         // 上一个关键帧到这个关键帧运行时的缓动函数。可选
 *         easing?: number
 *     
 *         // 其它属性为图形在这个关键帧的属性，例如 x, y, style, shape 等
 *     }
         * @var array $keyframes
         */
         public  $keyframes  ;

  

}