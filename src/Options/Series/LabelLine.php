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
class LabelLine extends AbstractOption {



        /**
         * 
 *     
 *     是否显示视觉引导线。
         * @var bool $show
         */
         public  $show  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     是否显示在图形上方。
         * @var bool $showAbove
         */
         public  $showAbove  ;

        /**
         * 
 *     
 *     视觉引导项第二段的长度。
         * @var int $length2
         */
         public  $length2  ;

        /**
         * 
 *     
 *     是否平滑视觉引导线，默认不平滑，可以设置成 true 平滑显示，也可以设置为 0 到 1 的值，表示平滑程度。
         * @var bool|int $smooth
         */
         public  $smooth  = false  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     通过调整第二段线的长度，限制引导线两端之间最小的夹角，以防止过小的夹角导致显示不美观。
 *     可以设置为 0 - 180 度。
         * @var int $minTurnAngle
         */
         public  $minTurnAngle  ;

        /**
         * 
         * @var LabelLine\LineStyle $lineStyle
         */
         public LabelLine\LineStyle $lineStyle  ;

  

}