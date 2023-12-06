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
 * 力引导布局相关的配置项，力引导布局是模拟弹簧电荷模型在每两个节点之间添加一个斥力，每条边的两个节点之间添加一个引力，每次迭代节点会在各个斥力和引力的作用下移动位置，多次迭代后节点会静止在一个受力平衡的位置，达到整个模型的能量最小化。
 *
 * 
 */
class Force extends AbstractOption {



        /**
         * 进行力引导布局前的初始化布局，初始化布局会影响到力引导的效果。
 *     默认不进行任何布局，使用节点中提供的 x， y 作为节点的位置。如果不存在的话会随机生成一个位置。
 *     也可以选择使用环形布局 circular。
         * @var string $initLayout
         */
         public  $initLayout  ;

        /**
         * 
 *     
 *     节点之间的斥力因子。
 *     支持设置成数组表达斥力的范围，此时不同大小的值会线性映射到不同的斥力。值越大则斥力越大
         * @var array|int $repulsion
         */
         public  $repulsion  = 50 ;

        /**
         * 
 *     
 *     节点受到的向中心的引力因子。该值越大节点越往中心点靠拢。
         * @var int $gravity
         */
         public  $gravity  = 0.1 ;

        /**
         * 
 *     
 *     边的两个节点之间的距离，这个距离也会受 repulsion。
 *     支持设置成数组表达边长的范围，此时不同大小的值会线性映射到不同的长度。值越小则长度越长。如下示例
 *     // 值最大的边长度会趋向于 10，值最小的边长度会趋向于 50
 *     edgeLength: [10, 50]
         * @var array|int $edgeLength
         */
         public  $edgeLength  = 30 ;

        /**
         * 
 *     
 *     因为力引导布局会在多次迭代后才会稳定，这个参数决定是否显示布局的迭代动画，在浏览器端节点数据较多（&gt;100）的时候不建议关闭，布局过程会造成浏览器假死。
         * @var bool $layoutAnimation
         */
         public  $layoutAnimation  = true  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v4.5.0 开始支持
 *     
 *     这个参数能减缓节点的移动速度。取值范围 0 到 1。
 *     但是仍然是个试验性的参数，参见 #11024。
         * @var int $friction
         */
         public  $friction  = 0.6 ;

  

}