<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Radar;

use EchartsJson\AbstractOption;

/**
 * 
 * 坐标轴在 grid 区域中的分隔区域，默认不显示。
 *
 * 
 */
class SplitArea extends AbstractOption {



        /**
         * 
 *     
 *     是否显示分隔区域。
         * @var bool $show
         */
         public  $show  = true  ;

        /**
         * 分隔区域的样式设置。
         * @var SplitArea\AreaStyle $areaStyle
         */
         public SplitArea\AreaStyle $areaStyle  ;

  

}