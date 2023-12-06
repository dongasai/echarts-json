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
 * 对于图表的整体性描述。
 *
 * 
 */
class General extends AbstractOption {



        /**
         * 如果图表存在 title.text，则采用 withTitle。其中包括模板变量：
 *     
 *     {title}：将被替换为图表的 title.text。
         * @var string $withTitle
         */
         public  $withTitle  = "这是一个关于“{title}”的图表。"  ;

        /**
         * 如果图表不存在 title.text，则采用 withoutTitle。
         * @var string $withoutTitle
         */
         public  $withoutTitle  = "这是一个图表，"  ;

  

}