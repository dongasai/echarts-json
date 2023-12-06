<?php
/**
 * Created by Dongasai EchartsJson AutoGenerate.
 * 
 * @author: dongasai <1514582970@qq.com>
 * @package dongasai/echarts-json
 */

namespace EchartsJson\Options\Toolbox;

use EchartsJson\AbstractOption;

/**
 * 
 * 各工具配置项。
 *
 * 
 */
class Feature extends AbstractOption {



        /**
         * 保存为图片。
         * @var Feature\SaveAsImage $saveAsImage
         */
         public Feature\SaveAsImage $saveAsImage  ;

        /**
         * 配置项还原。
         * @var Feature\Restore $restore
         */
         public Feature\Restore $restore  ;

        /**
         * 数据视图工具，可以展现当前图表所用的数据，编辑后可以动态更新。
         * @var Feature\DataView $dataView
         */
         public Feature\DataView $dataView  ;

        /**
         * 数据区域缩放。目前只支持直角坐标系的缩放。
         * @var Feature\DataZoom $dataZoom
         */
         public Feature\DataZoom $dataZoom  ;

        /**
         * 动态类型切换
 *     示例：
 *     feature: {
 *         magicType: {
 *             type: [line, bar, stack]
 *         }
 *     }
         * @var Feature\MagicType $magicType
         */
         public Feature\MagicType $magicType  ;

        /**
         * 选框组件的控制按钮。
 *     也可以不在这里指定，而是在 brush.toolbox 中指定。
         * @var Feature\Brush $brush
         */
         public Feature\Brush $brush  ;

  

}