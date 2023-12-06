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
 * 涟漪特效相关配置。
 *
 * 
 */
class RippleEffect extends AbstractOption {



        /**
         * 
 *     从 v4.4.0 开始支持
 *     
 *     
 *     
 *     涟漪的颜色，默认为散点的颜色。
         * @var string $color
         */
         public  $color  ;

        /**
         * 
 *     从 v5.2.0 开始支持
 *     
 *     
 *     
 *     波纹的数量。
         * @var int $number
         */
         public  $number  = 3 ;

        /**
         * 
 *     
 *     动画的周期，秒数。
         * @var int $period
         */
         public  $period  = 4 ;

        /**
         * 
 *     
 *     动画中波纹的最大缩放比例。
         * @var int $scale
         */
         public  $scale  = 2.5 ;

        /**
         * 
 *     
 *     波纹的绘制方式，可选 stroke 和 fill。
         * @var string $brushType
         */
         public  $brushType  = "fill"  ;

  

}