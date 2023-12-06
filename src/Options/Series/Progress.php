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
class Progress extends AbstractOption {



        /**
         * 
 *     
 *     是否显示进度条。
         * @var bool $show
         */
         public  $show  = false  ;

        /**
         * 
 *     
 *     多组数据时进度条是否重叠。
         * @var bool $overlap
         */
         public  $overlap  = true  ;

        /**
         * 
 *     
 *     进度条宽度。
         * @var int $width
         */
         public  $width  = 10 ;

        /**
         * 是否在两端显示成圆形。
         * @var bool $roundCap
         */
         public  $roundCap  = false  ;

        /**
         * 是否裁掉超出部分。
         * @var bool $clip
         */
         public  $clip  = false  ;

        /**
         * 进度条样式。
         * @var Progress\ItemStyle $itemStyle
         */
         public Progress\ItemStyle $itemStyle  ;

  

}