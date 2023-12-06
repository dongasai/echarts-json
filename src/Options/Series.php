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
 * 
 * 
 */
class Series extends AbstractOption {



        /**
         * 
         * @var string $type
         */
         public  $type  = "line"  ;

        /**
         * 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
         * @var string $id
         */
         public  $id  ;

        /**
         * 系列名称，用于tooltip的显示，legend 的图例筛选，在 setOption 更新数据和配置项时用于指定对应的系列。
         * @var string $name
         */
         public  $name  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v5.2.0 开始支持
 *     
 *     从调色盘 option.color 中取色的策略，可取值为：
 *     
 *     series：按照系列分配调色盘中的颜色，同一系列中的所有数据都是用相同的颜色；
 *     data：按照数据项分配调色盘中的颜色，每个数据项都使用不同的颜色。
         * @var string $colorBy
         */
         public  $colorBy  = "series"  ;

        /**
         * 该系列使用的坐标系，可选：
 *     
 *     cartesian2d
 *       使用二维的直角坐标系（也称笛卡尔坐标系），通过 xAxisIndex, yAxisIndex指定相应的坐标轴组件。
 *     
 *     
 *     
 *     polar
 *       使用极坐标系，通过 polarIndex 指定相应的极坐标组件
         * @var string $coordinateSystem
         */
         public  $coordinateSystem  = "cartesian2d"  ;

        /**
         * 使用的 x 轴的 index，在单个图表实例中存在多个 x 轴的时候有用。
         * @var int $xAxisIndex
         */
         public  $xAxisIndex  = 0 ;

        /**
         * 使用的 y 轴的 index，在单个图表实例中存在多个 y轴的时候有用。
         * @var int $yAxisIndex
         */
         public  $yAxisIndex  = 0 ;

        /**
         * 使用的极坐标系的 index，在单个图表实例中存在多个极坐标系的时候有用。
         * @var int $polarIndex
         */
         public  $polarIndex  = 0 ;

        /**
         * 
 *     
 *     标记的图形。
 *     ECharts 提供的标记类型包括
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     可以通过 image://url 设置为图片，其中 URL 为图片的链接，或者 dataURI。
 *     URL 为图片链接例如：
 *     image://http://example.website/a/b.png
 *     URL 为 dataURI 例如：
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     例如：
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     如果需要每个数据的图形不一样，可以设置为如下格式的回调函数：
 *     (value: Array|number, params: Object) =&gt; string
 *     
 *     其中第一个参数 value 为 data 中的数据值。第二个参数params 是其它的数据项参数。
         * @var string|callable $symbol
         */
         public  $symbol  = "emptyCircle"  ;

        /**
         * 
 *     
 *     标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *     如果需要每个数据的图形大小不一样，可以设置为如下格式的回调函数：
 *     (value: Array|number, params: Object) =&gt; number|Array
 *     
 *     其中第一个参数 value 为 data 中的数据值。第二个参数params 是其它的数据项参数。
         * @var int|array|callable $symbolSize
         */
         public  $symbolSize  = 4 ;

        /**
         * 
 *     
 *     标记的旋转角度（而非弧度）。正值表示逆时针旋转。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *     如果需要每个数据的旋转角度不一样，可以设置为如下格式的回调函数：
 *     (value: Array|number, params: Object) =&gt; number
 *     
 *     其中第一个参数 value 为 data 中的数据值。第二个参数params 是其它的数据项参数。
 *     
 *     从 4.8.0 开始支持回调函数。
         * @var int|callable $symbolRotate
         */
         public  $symbolRotate  ;

        /**
         * 
 *     
 *     如果 symbol 是 path:// 的形式，是否在缩放时保持该图形的长宽比。
         * @var bool $symbolKeepAspect
         */
         public  $symbolKeepAspect  = false  ;

        /**
         * 
 *     
 *     标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, -50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
         * @var array $symbolOffset
         */
         public  $symbolOffset  = "[0, 0]"  ;

        /**
         * 
 *     
 *     是否显示 symbol, 如果 false 则只有在 tooltip hover 的时候显示。
         * @var bool $showSymbol
         */
         public  $showSymbol  = true  ;

        /**
         * 
 *     
 *     只在主轴为类目轴（axis.type 为 category）时有效。
 *     可选值：
 *     
 *     auto：默认，如果有足够空间则显示标志图形，否则随主轴标签间隔隐藏策略。
 *     true：显示所有图形。
 *     false：随主轴标签间隔隐藏策略。
         * @var bool $showAllSymbol
         */
         public  $showAllSymbol  = "auto"  ;

        /**
         * 
 *     
 *     是否启用图例 hover 时的联动高亮。
         * @var bool $legendHoverLink
         */
         public  $legendHoverLink  = true  ;

        /**
         * 数据堆叠，同个类目轴上系列配置相同的 stack 值可以堆叠放置。关于如何定制数值的堆叠方式，参见 stackStrategy。
 *     注：目前 stack 只支持堆叠于 value 和 log 类型的类目轴上，不支持 time 和 category 类型的类目轴。
 *     下面示例可以通过右上角 toolbox 中的堆叠切换看效果：
         * @var string $stack
         */
         public  $stack  ;

        /**
         * 
 *     从 v5.3.3 开始支持
 *     
 *     堆积数值的策略，前提是stack属性已被设置。其值可以是：
 *     
 *     samesign 只在要堆叠的值与当前累积的堆叠值具有相同的正负符号时才堆叠。
 *     all 堆叠所有的值，不管当前或累积的堆叠值的正负符号是什么。
 *     positive 只堆积正值。
 *     negative 只堆叠负值。
         * @var string $stackStrategy
         */
         public  $stackStrategy  = "samesign"  ;

        /**
         * 
 *     
 *     鼠标悬浮时在图形元素上时鼠标的样式是什么。同 CSS 的 cursor。
         * @var string $cursor
         */
         public  $cursor  = "pointer"  ;

        /**
         * 
 *     
 *     是否连接空数据。
         * @var bool $connectNulls
         */
         public  $connectNulls  = false  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v4.4.0 开始支持
 *     
 *     是否裁剪超出坐标系部分的图形，具体裁剪效果根据系列决定：
 *     
 *     散点图/带有涟漪特效动画的散点（气泡）图：忽略中心点超出坐标系的图形，但是不裁剪单个图形
 *     柱状图：裁掉完全超出的柱子，但是不会裁剪只超出部分的柱子
 *     折线图：裁掉所有超出坐标系的折线部分，拐点图形的逻辑按照散点图处理
 *     路径图：裁掉所有超出坐标系的部分
 *     K 线图：忽略整体都超出坐标系的图形，但是不裁剪单个图形
 *     自定义系列：裁掉所有超出坐标系的部分
 *     
 *     除了自定义系列，其它系列的默认值都为 true，及开启裁剪，如果你觉得不想要裁剪的话，可以设置成 false 关闭。
         * @var bool $clip
         */
         public  $clip  = true  ;

        /**
         * 
 *     从 v5.2.2 开始支持
 *     
 *     线条和区域面积是否触发事件
         * @var bool $triggerLineEvent
         */
         public  $triggerLineEvent  = false  ;

        /**
         * 
 *     
 *     是否是阶梯线图。可以设置为 true 显示成阶梯线图，也支持设置成 start, middle, end 分别配置在当前点，当前点与下个点的中间点，下个点拐弯。
 *     不同的配置效果如下：
         * @var string|bool $step
         */
         public  $step  = false  ;

        /**
         * 图形上的文本标签，可用于说明图形的一些数据信息，比如值，名称等。
         * @var Series\Label $label
         */
         public Series\Label $label  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     折线端点的标签。
         * @var Series\EndLabel $endLabel
         */
         public Series\EndLabel $endLabel  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     标签的视觉引导线配置。
         * @var Series\LabelLine $labelLine
         */
         public Series\LabelLine $labelLine  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     标签的统一布局配置。
 *     该配置项是在每个系列默认的标签布局基础上，统一调整标签的(x, y)位置，标签对齐等属性以实现想要的标签布局效果。
 *     该配置项也可以是一个有如下参数的回调函数
 *     // 标签对应数据的 dataIndex
 *     dataIndex: number
 *     // 标签对应的数据类型，只在关系图中会有 node 和 edge 数据类型的区分
 *     dataType?: string
 *     // 标签对应的系列的 index
 *     seriesIndex: number
 *     // 标签显示的文本
 *     text: string
 *     // 默认的标签的包围盒，由系列默认的标签布局决定
 *     labelRect: {x: number, y: number, width: number, height: number}
 *     // 默认的标签水平对齐
 *     align: left | center | right
 *     // 默认的标签垂直对齐
 *     verticalAlign: top | middle | bottom
 *     // 标签所对应的数据图形的包围盒，可用于定位标签位置
 *     rect: {x: number, y: number, width: number, height: number}
 *     // 默认引导线的位置，目前只有饼图(pie)和漏斗图(funnel)有默认标签位置
 *     // 如果没有该值则为 null
 *     labelLinePoints?: number[][]
 *     
 *     示例：
 *     将标签显示在图形右侧 10px 的位置，并且垂直居中：
 *     labelLayout(params) {
 *         return {
 *             x: params.rect.x + 10,
 *             y: params.rect.y + params.rect.height / 2,
 *             verticalAlign: middle,
 *             align: left
 *         }
 *     }
 *     
 *     根据图形的包围盒尺寸决定文本尺寸
 *     
 *     labelLayout(params) {
 *         return {
 *             fontSize: Math.max(params.rect.width / 10, 5)
 *         };
 *     }
         * @var Series\LabelLayout $labelLayout
         */
         public Series\LabelLayout $labelLayout  ;

        /**
         * 折线拐点标志的样式。
         * @var Series\ItemStyle $itemStyle
         */
         public Series\ItemStyle $itemStyle  ;

        /**
         * 线条样式。
 *     注： 修改 lineStyle 中的颜色不会影响图例颜色，如果需要图例颜色和折线图颜色一致，需修改 itemStyle.color，线条颜色默认也会取该颜色。
         * @var Series\LineStyle $lineStyle
         */
         public Series\LineStyle $lineStyle  ;

        /**
         * 区域填充样式。设置后显示成区域面积图。
         * @var Series\AreaStyle $areaStyle
         */
         public Series\AreaStyle $areaStyle  ;

        /**
         * 折线图的高亮状态。
         * @var Series\Emphasis $emphasis
         */
         public Series\Emphasis $emphasis  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     折线图的淡出状态。开启 emphasis.focus 后有效。
         * @var Series\Blur $blur
         */
         public Series\Blur $blur  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     折线图的选中状态。开启 selectedMode 后有效。
         * @var Series\Select $select
         */
         public Series\Select $select  ;

        /**
         * 
 *     从 v5.0.0 开始支持
 *     
 *     
 *     
 *     选中模式的配置，表示是否支持多个选中，默认关闭，支持布尔值和字符串，字符串取值可选single，multiple，series 分别表示单选，多选以及选择整个系列。
 *     
 *     从 v5.3.0 开始支持 series。
         * @var bool|string $selectedMode
         */
         public  $selectedMode  = false  ;

        /**
         * 是否平滑曲线显示。
 *     如果是 boolean 类型，则表示是否开启平滑处理。如果是 number 类型（取值范围 0 到 1），表示平滑程度，越小表示越接近折线段，反之则反。设为 true 时相当于设为 0.5。
 *     如果需要修改平滑算法，请参考 smoothMonotone。
         * @var bool|int $smooth
         */
         public  $smooth  = false  ;

        /**
         * 折线平滑后是否在一个维度上保持单调性，可以设置成x, y来指明是在 x 轴或者 y 轴上保持单调性。
 *     通常在双数值轴上使用。
 *     下面两张图分别是双数值轴中的折线图smoothMonotone不设置以及设置为x的区别。
 *     
 *     不设置smoothMonotone:
 *     
 *     
 *     
 *     设置为 x:
         * @var string $smoothMonotone
         */
         public  $smoothMonotone  ;

        /**
         * 折线图在数据量远大于像素点时候的降采样策略，开启后可以有效的优化图表的绘制效率，默认关闭，也就是全部绘制不过滤数据点。
 *     可选：
 *     
 *     lttb 采用 Largest-Triangle-Three-Bucket 算法，可以最大程度保证采样后线条的趋势，形状和极值。
 *     average 取过滤点的平均值
 *     max 取过滤点的最大值
 *     min 取过滤点的最小值
 *     sum 取过滤点的和
         * @var string $sampling
         */
         public  $sampling  ;

        /**
         * 使用 dimensions 定义 series.data 或者 dataset.source 的每个维度的信息。
 *     注意：如果使用了 dataset，那么可以在 dataset.dimensions 中定义 dimension ，或者在 dataset.source 的第一行/列中给出 dimension 名称。于是就不用在这里指定 dimension。但如果在这里指定了 dimensions，那么优先使用这里的。
 *     例如：
 *     option = {
 *         dataset: {
 *             source: [
 *                 // 有了上面 dimensions 定义后，下面这五个维度的名称分别为：
 *                 // date, open, close, highest, lowest
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             // 定义了每个维度的名称。这个名称会被显示到默认的 tooltip 中。
 *             dimensions: [date, open, close, highest, lowest]
 *         }
 *     }
 *     
 *     series: {
 *         type: xxx,
 *         dimensions: [
 *             null,                // 如果此维度不想给出定义，则使用 null 即可
 *             {type: ordinal},   // 只定义此维度的类型。
 *                                  // ordinal 表示离散型，一般文本使用这种类型。
 *                                  // 如果类型没有被定义，会自动猜测类型。
 *             {name: good, type: number},
 *             bad                // 等同于 {name: bad}
 *         ]
 *     }
 *     
 *     dimensions 数组中的每一项可以是：
 *     
 *     string，如 someName，等同于 {name: someName}
 *     Object，属性可以有：
 *     name: string。
 *     type: string，支持
 *     number，默认，表示普通数据。
 *     ordinal，对于类目、文本这些 string 类型的数据，如果需要能在数轴上使用，须是 ordinal 类型。ECharts 默认会自动判断这个类型。但是自动判断也是不可能很完备的，所以使用者也可以手动强制指定。
 *     float，即 Float64Array。
 *     int，即 Int32Array。
 *     time，表示时间类型。设置成 time 则能支持自动解析数据成时间戳（timestamp），比如该维度的数据是 2017-05-10，会自动被解析。时间类型的支持参见 data。
 *     
 *     
 *     displayName: 一般用于 tooltip 中维度名的展示。string 如果没有指定，默认使用 name 来展示。
 *     
 *     
 *     
 *     值得一提的是，当定义了 dimensions 后，默认 tooltip 中对个维度的显示，会变为『竖排』，从而方便显示每个维度的名称。如果没有定义 dimensions，则默认 tooltip 会横排显示，且只显示数值没有维度名称可显示。
         * @var array $dimensions
         */
         public  $dimensions  ;

        /**
         * 可以定义 data 的哪个维度被编码成什么。比如：
 *     option = {
 *         dataset: {
 *             source: [
 *                 // 每一列称为一个『维度』。
 *                 // 这里分别是维度 0、1、2、3、4。
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             encode: {
 *                 x: [3, 1, 5],      // 表示维度 3、1、5 映射到 x 轴。
 *                 y: 2,              // 表示维度 2 映射到 y 轴。
 *                 tooltip: [3, 2, 4] // 表示维度 3、2、4 会在 tooltip 中显示。
 *             }
 *         }
 *     }
 *     
 *     当使用 dimensions 给维度定义名称后，encode 中可直接引用名称，例如：
 *     series: {
 *         type: xxx,
 *         dimensions: [date, open, close, highest, lowest],
 *         encode: {
 *             x: date,
 *             y: [open, close, highest, lowest]
 *         }
 *     }
 *     
 *     encode 声明的基本结构如下，其中冒号左边是坐标系、标签等特定名称，如 x, y, tooltip 等，冒号右边是数据中的维度名（string 格式）或者维度的序号（number 格式，从 0 开始计数），可以指定一个或多个维度（使用数组）。通常情况下，下面各种信息不需要所有的都写，按需写即可。
 *     下面是 encode 支持的属性：
 *     // 在任何坐标系和系列中，都支持：
 *     encode: {
 *         // 使用 “名为 product 的维度” 和 “名为 score 的维度” 的值在 tooltip 中显示
 *         tooltip: [product, score]
 *         // 使用第一个维度和第三个维度的维度名连起来作为系列名。（有时候名字比较长，这可以避免在 series.name 重复输入这些名字）
 *         seriesName: [1, 3],
 *         // 表示使用第二个维度中的值作为 id。这在使用 setOption 动态更新数据时有用处，可以使新老数据用 id 对应起来，从而能够产生合适的数据更新动画。
 *         itemId: 2,
 *         // 指定数据项的名称使用第三个维度在饼图等图表中有用，可以使这个名字显示在图例（legend）中。
 *         itemName: 3,
 *         // 指定数据项的组 ID (groupID)，组 ID 会被用于分类数据，并在全局过渡动画中决定如何进行合并和分裂动画，具体见 universalTransition
 *         itemGroupId: 4
 *     }
 *     
 *     // 直角坐标系（grid/cartesian）特有的属性：
 *     encode: {
 *         // 把 “维度1”、“维度5”、“名为 score 的维度” 映射到 X 轴：
 *         x: [1, 5, score],
 *         // 把“维度0”映射到 Y 轴。
 *         y: 0
 *     }
 *     
 *     // 单轴（singleAxis）特有的属性：
 *     encode: {
 *         single: 3
 *     }
 *     
 *     // 极坐标系（polar）特有的属性：
 *     encode: {
 *         radius: 3,
 *         angle: 2
 *     }
 *     
 *     // 地理坐标系（geo）特有的属性：
 *     encode: {
 *         lng: 3,
 *         lat: 2
 *     }
 *     
 *     // 对于一些没有坐标系的图表，例如饼图、漏斗图等，可以是：
 *     encode: {
 *         value: 3
 *     }
 *     
 *     这是个更丰富的 encode 的示例：
 *     特殊地，在 自定义系列（custom series） 中，encode 中轴可以不指定或设置为 null/undefined，从而使系列免于受这个轴控制，也就是说，轴的范围（extent）不会受此系列数值的影响，轴被 dataZoom 控制时也不会过滤掉这个系列：
 *     var option = {
 *         xAxis: {},
 *         yAxis: {},
 *         dataZoom: [{
 *             xAxisIndex: 0
 *         }, {
 *             yAxisIndex: 0
 *         }],
 *         series: {
 *             type: custom,
 *             renderItem: function (params, api) {
 *                 return {
 *                     type: circle,
 *                     shape: {
 *                         cx: 100, // x 位置永远为 100
 *                         cy: api.coord([0, api.value(0)])[1],
 *                         r: 30
 *                     },
 *                     style: {
 *                         fill: blue
 *                     }
 *                 };
 *             },
 *             encode: {
 *                 // 这样这个系列就不会被 x 轴以及 x
 *                 // 轴上的 dataZoom 控制了。
 *                 x: -1,
 *                 y: 1
 *             },
 *             data: [ ... ]
 *         }
 *     };
         * @var array $encode
         */
         public  $encode  ;

        /**
         * 当使用 dataset 时，seriesLayoutBy 指定了 dataset 中用行还是列对应到系列上，也就是说，系列“排布”到 dataset 的行还是列上。可取值：
 *     
 *     column：默认，dataset 的列对应于系列，从而 dataset 中每一列是一个维度（dimension）。
 *     row：dataset 的行对应于系列，从而 dataset 中每一行是一个维度（dimension）。
 *     
 *     参见这个 示例
         * @var string $seriesLayoutBy
         */
         public  $seriesLayoutBy  = "column"  ;

        /**
         * 如果 series.data 没有指定，并且 dataset 存在，那么就会使用 dataset。datasetIndex 指定本系列使用那个 dataset。
         * @var int $datasetIndex
         */
         public  $datasetIndex  = 0 ;

        /**
         * 该系列所有数据共有的组 ID。组 ID 会被用于分类数据，并在全局过渡动画中决定如何进行合并和分裂动画。
 *     如果你使用了dataset组件来表达数据，推荐使用encode.itemGroupID来指定哪个维度被编码为组 ID。
         * @var string $dataGroupId
         */
         public  $dataGroupId  ;

        /**
         * 系列中的数据内容数组。数组项通常为具体的数据项。
 *     注意，如果系列没有指定 data，并且 option 有 dataset，那么默认使用第一个 dataset。如果指定了 data，则不会再使用 dataset。
 *     可以使用 series.datasetIndex 指定其他的 dataset。
 *     通常来说，数据用一个二维数组表示。如下，每一列被称为一个『维度』。
 *     series: [{
 *         data: [
 *             // 维度X   维度Y   其他维度 ...
 *             [  3.4,    4.5,   15,   43],
 *             [  4.2,    2.3,   20,   91],
 *             [  10.8,   9.5,   30,   18],
 *             [  7.2,    8.8,   18,   57]
 *         ]
 *     }]
 *     
 *     
 *     在 直角坐标系 (grid) 中『维度X』和『维度Y』会默认对应于 xAxis 和 yAxis。
 *     在 极坐标系 (polar) 中『维度X』和『维度Y』会默认对应于 radiusAxis 和 angleAxis。
 *     后面的其他维度是可选的，可以在别处被使用，例如：
 *     在 visualMap 中可以将一个或多个维度映射到颜色，大小等多个图形属性上。
 *     在 series.symbolSize 中可以使用回调函数，基于某个维度得到 symbolSize 值。
 *     使用 tooltip.formatter 或 series.label.formatter 可以把其他维度的值展示出来。
 *     
 *     
 *     
 *     特别地，当只有一个轴为类目轴（axis.type 为 category）的时候，数据可以简化用一个一维数组表示。例如：
 *     xAxis: {
 *         data: [a, b, m, n]
 *     },
 *     series: [{
 *         // 与 xAxis.data 一一对应。
 *         data: [23,  44,  55,  19]
 *         // 它其实是下面这种形式的简化：
 *         // data: [[0, 23], [1, 44], [2, 55], [3, 19]]
 *     }]
 *     
 *     『值』与 轴类型 的关系：
 *     
 *     当某维度对应于数值轴（axis.type 为 value 或者 log）的时候：
 *       其值可以为 number（例如 12）。（也可以兼容 string 形式的 number，例如 12）
 *     
 *     当某维度对应于类目轴（axis.type 为 category）的时候：
 *       其值须为类目的『序数』（从 0 开始）或者类目的『字符串值』。例如：
 *       xAxis: {
 *           type: category,
 *           data: [星期一, 星期二, 星期三, 星期四]
 *       },
 *       yAxis: {
 *           type: category,
 *           data: [a, b, m, n, p, q]
 *       },
 *       series: [{
 *           data: [
 *               // xAxis    yAxis
 *               [  0,        0,    2  ], // 意思是此点位于 xAxis: 星期一, yAxis: a。
 *               [  星期四,  2,    1  ], // 意思是此点位于 xAxis: 星期四, yAxis: m。
 *               [  2,       p,   2  ], // 意思是此点位于 xAxis: 星期三, yAxis: p。
 *               [  3,        3,    5  ]
 *           ]
 *       }]
 *     
 *       双类目轴的示例可以参考 Github Punchcard 示例。
 *     
 *     当某维度对应于时间轴（type 为 time）的时候，值可以为：
 *     
 *     一个时间戳，如 1484141700832，表示 UTC 时间。
 *     或者字符串形式的时间描述：
 *     ISO 8601 的子集，只包含这些形式（这几种格式，除非指明时区，否则均表示本地时间，与 moment 一致）：
 *     部分年月日时间: 2012-03, 2012-03-01, 2012-03-01 05, 2012-03-01 05:06.
 *     使用 T 或空格分割: 2012-03-01T12:22:33.123, 2012-03-01 12:22:33.123.
 *     时区设定: 2012-03-01T12:22:33Z, 2012-03-01T12:22:33+8000, 2012-03-01T12:22:33-05:00.
 *     
 *     
 *     其他的时间字符串，包括（均表示本地时间）:
 *     2012, 2012-3-1, 2012/3/1, 2012/03/01,
 *     2009/6/12 2:00, 2009/6/12 2:05:08, 2009/6/12 2:05:08.123
 *     
 *     
 *     或者用户自行初始化的 Date 实例：
 *     注意，用户自行初始化 Date 实例的时候，浏览器的行为有差异，不同字符串的表示也不同。
 *     例如：在 chrome 中，new Date(2012-01-01) 表示 UTC 时间的 2012 年 1 月 1 日，而 new Date(2012-1-1) 和 new Date(2012/01/01) 表示本地时间的 2012 年 1 月 1 日。在 safari 中，不支持 new Date(2012-1-1) 这种表示方法。
 *     所以，使用 new Date(dataString) 时，可使用第三方库解析（如 moment），或者使用 echarts.time.parse，或者参见 这里。
 *     
 *     
 *     
 *     
 *     
 *     当需要对个别数据进行个性化定义时：
 *     数组项可用对象，其中的 value 像表示具体的数值，如：
 *     [
 *         12,
 *         34,
 *         {
 *             value : 56,
 *             //自定义标签样式，仅对该数据项有效
 *             label: {},
 *             //自定义特殊 itemStyle，仅对该数据项有效
 *             itemStyle:{}
 *         },
 *         10
 *     ]
 *     // 或
 *     [
 *         [12, 33],
 *         [34, 313],
 *         {
 *             value: [56, 44],
 *             label: {},
 *             itemStyle:{}
 *         },
 *         [10, 33]
 *     ]
 *     
 *     空值：
 *     当某数据不存在时（ps：不存在不代表值为 0），可以用 - 或者 null 或者 undefined 或者 NaN 表示。
 *     例如，无数据在折线图中可表现为该点是断开的，在其它图中可表示为图形不存在。
         * @var array $data
         */
         public  $data  ;

        /**
         * 图表标注。
         * @var Series\MarkPoint $markPoint
         */
         public Series\MarkPoint $markPoint  ;

        /**
         * 图表标线。
         * @var Series\MarkLine $markLine
         */
         public Series\MarkLine $markLine  ;

        /**
         * 图表标域，常用于标记图表中某个范围的数据，例如标出某段时间投放了广告。
         * @var Series\MarkArea $markArea
         */
         public Series\MarkArea $markArea  ;

        /**
         * 折线图所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
         * @var int $zlevel
         */
         public  $zlevel  = 0 ;

        /**
         * 折线图组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
         * @var int $z
         */
         public  $z  = 2 ;

        /**
         * 
 *     
 *     图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
         * @var bool $silent
         */
         public  $silent  = false  ;

        /**
         * 
 *     
 *     是否开启动画。
         * @var bool $animation
         */
         public  $animation  = true  ;

        /**
         * 是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
         * @var int $animationThreshold
         */
         public  $animationThreshold  = 2000 ;

        /**
         * 
 *     
 *     初始动画的时长，支持回调函数，可以通过每个数据返回不同的时长实现更戏剧的初始动画效果：
 *     animationDuration: function (idx) {
 *         // 越往后的数据时长越大
 *         return idx * 100;
 *     }
         * @var int|callable $animationDuration
         */
         public  $animationDuration  = 1000 ;

        /**
         * 
 *     
 *     初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
         * @var string $animationEasing
         */
         public  $animationEasing  = "linear"  ;

        /**
         * 初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
 *     如下示例：
 *     animationDelay: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
         * @var int|callable $animationDelay
         */
         public  $animationDelay  = 0 ;

        /**
         * 
 *     
 *     数据更新动画的时长。
 *     支持回调函数，可以通过每个数据返回不同的时长实现更戏剧的更新动画效果：
 *     animationDurationUpdate: function (idx) {
 *         // 越往后的数据时长越大
 *         return idx * 100;
 *     }
         * @var int|callable $animationDurationUpdate
         */
         public  $animationDurationUpdate  = 300 ;

        /**
         * 
 *     
 *     数据更新动画的缓动效果。
         * @var string $animationEasingUpdate
         */
         public  $animationEasingUpdate  = "cubicInOut"  ;

        /**
         * 数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelayUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
         * @var int|callable $animationDelayUpdate
         */
         public  $animationDelayUpdate  = 0 ;

        /**
         * 
 *     从 v5.2.0 开始支持
 *     
 *     全局过渡动画相关的配置。
 *     全局过渡动画（Universal Transition）提供了任意系列之间进行变形动画的功能。开启该功能后，每次setOption，相同id的系列之间会自动关联进行动画的过渡，更细粒度的关联配置见universalTransition.seriesKey配置。
 *     通过配置encode.itemGroupId或者dataGroupId等指定数据的分组，还可以实现诸如下钻，聚合等一对多或者多对一的动画。
 *     可以直接在系列中配置 universalTransition: true 开启该功能。也可以提供一个对象进行更多属性的配置。
         * @var Series\UniversalTransition $universalTransition
         */
         public Series\UniversalTransition $universalTransition  ;

        /**
         * 本系列特定的 tooltip 设定。
         * @var Series\Tooltip $tooltip
         */
         public Series\Tooltip $tooltip  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v4.5.0 开始支持
 *     
 *     
 *     
 *     是否在环形柱条两侧使用圆弧效果。
 *     仅对极坐标系柱状图有效。
         * @var bool $roundCap
         */
         public  $roundCap  = false  ;

        /**
         * 是否开启实时排序，用来实现动态排序图效果，具体参见手册中动态排序柱状图的教程。
         * @var bool $realtimeSort
         */
         public  $realtimeSort  = false  ;

        /**
         * 
 *     从 v4.7.0 开始支持
 *     
 *     
 *     
 *     是否显示柱条的背景色。通过 backgroundStyle 配置背景样式。
         * @var bool $showBackground
         */
         public  $showBackground  = false  ;

        /**
         * 
 *     从 v4.7.0 开始支持
 *     
 *     每一个柱条的背景样式。需要将 showBackground 设置为 true 时才有效。
         * @var Series\BackgroundStyle $backgroundStyle
         */
         public Series\BackgroundStyle $backgroundStyle  ;

        /**
         * 柱条的宽度，不设时自适应。
 *     
 *     
 *     
 *     
 *     可以是绝对值例如 40 或者百分数例如 60%。百分数基于自动计算出的每一类目的宽度。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
         * @var int|string $barWidth
         */
         public  $barWidth  = "自适应"  ;

        /**
         * 柱条的最大宽度。
 *     比 barWidth 优先级高。
 *     可以是绝对值例如 40 或者百分数例如 60%。百分数基于自动计算出的每一类目的宽度。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
         * @var int|string $barMaxWidth
         */
         public  $barMaxWidth  ;

        /**
         * 柱条的最小宽度。在直角坐标系中，默认值是 1。否则默认值是 null。
 *     比 barWidth 优先级高。
 *     可以是绝对值例如 40 或者百分数例如 60%。百分数基于自动计算出的每一类目的宽度。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
         * @var int|string $barMinWidth
         */
         public  $barMinWidth  ;

        /**
         * 柱条最小高度，可用于防止某数据项的值过小而影响交互。
         * @var int $barMinHeight
         */
         public  $barMinHeight  = 0 ;

        /**
         * 柱条最小角度，可用于防止某数据项的值过小而影响交互。
 *     仅对极坐标系柱状图有效。
         * @var int $barMinAngle
         */
         public  $barMinAngle  = 0 ;

        /**
         * 
 *     
 *     不同系列的柱间距离，为百分比（如 30%，表示柱子宽度的 30%）。
 *     如果想要两个系列的柱子重叠，可以设置 barGap 为 -100%。这在用柱子做背景的时候有用。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
 *     例子：
         * @var string $barGap
         */
         public  $barGap  = "30%"  ;

        /**
         * 
 *     
 *     同一系列的柱间距离，默认为类目间距的20%，可设固定值
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
         * @var string $barCategoryGap
         */
         public  $barCategoryGap  = "20%"  ;

        /**
         * 
 *     
 *     是否开启大数据量优化，在数据图形特别多而出现卡顿时候可以开启。
 *     开启后配合 largeThreshold 在数据量大于指定阈值的时候对绘制进行优化。
 *     缺点：优化后不能自定义设置单个数据项的样式。
         * @var bool $large
         */
         public  $large  = false  ;

        /**
         * 
 *     
 *     开启绘制优化的阈值。
         * @var int $largeThreshold
         */
         public  $largeThreshold  = 400 ;

        /**
         * 渐进式渲染时每一帧绘制图形数量，设为 0 时不启用渐进式渲染，支持每个系列单独配置。
 *     在图中有数千到几千万图形元素的时候，一下子把图形绘制出来，或者交互重绘的时候可能会造成界面的卡顿甚至假死。ECharts 4 开始全流程支持渐进渲染（progressive rendering），渲染的时候会把创建好的图形分到数帧中渲染，每一帧渲染只渲染指定数量的图形。
 *     该配置项就是用于配置该系列每一帧渲染的图形数，可以根据图表图形复杂度的需要适当调整这个数字使得在不影响交互流畅性的前提下达到绘制速度的最大化。比如在 lines 图或者平行坐标中线宽大于 1 的 polyline 绘制会很慢，这个数字就可以设置小一点，而线宽小于等于 1 的 polyline 绘制非常快，该配置项就可以相对调得比较大。
         * @var int $progressive
         */
         public  $progressive  = 5000 ;

        /**
         * 启用渐进式渲染的图形数量阈值，在单个系列的图形数量超过该阈值时启用渐进式渲染。
         * @var int $progressiveThreshold
         */
         public  $progressiveThreshold  = 3000 ;

        /**
         * 分片的方式。可选值：
 *     
 *     sequential: 按照数据的顺序分片。缺点是渲染过程不自然。
 *     mod: 取模分片，即每个片段中的点会遍布于整个数据，从而能够视觉上均匀得渲染。
         * @var string $progressiveChunkMode
         */
         public  $progressiveChunkMode  = "mod"  ;

        /**
         * 
 *     从 v5.4.0 开始支持
 *     
 *     使用的地理坐标系的 index，在单个图表实例中存在多个地理坐标系的时候有用。
         * @var int $geoIndex
         */
         public  $geoIndex  = 0 ;

        /**
         * 
 *     从 v5.4.0 开始支持
 *     
 *     使用的日历坐标系的 index，在单个图表实例中存在多个日历坐标系的时候有用。
         * @var int $calendarIndex
         */
         public  $calendarIndex  = 0 ;

        /**
         * 
 *     
 *     选中扇区的偏移距离。
         * @var int $selectedOffset
         */
         public  $selectedOffset  = 10 ;

        /**
         * 
 *     
 *     饼图的扇区是否是顺时针排布。
         * @var bool $clockwise
         */
         public  $clockwise  = true  ;

        /**
         * 
 *     
 *     起始角度，支持范围[0, 360]。
         * @var int $startAngle
         */
         public  $startAngle  = 90 ;

        /**
         * 
 *     
 *     最小的扇区角度（0 ~ 360），用于防止某个值过小导致扇区太小影响交互。
         * @var int $minAngle
         */
         public  $minAngle  = 0 ;

        /**
         * 
 *     
 *     小于这个角度（0 ~ 360）的扇区，不显示标签（label 和 labelLine）。
         * @var int $minShowLabelAngle
         */
         public  $minShowLabelAngle  = 0 ;

        /**
         * 
 *     
 *     是否展示成南丁格尔图，通过半径区分数据大小。可选择两种模式：
 *     
 *     radius 扇区圆心角展现数据的百分比，半径展现数据的大小。
 *     area 所有扇区圆心角相同，仅通过半径展现数据大小。
         * @var bool|string $roseType
         */
         public  $roseType  = false  ;

        /**
         * 
 *     
 *     是否启用防止标签重叠策略，默认开启，在标签拥挤重叠的情况下会挪动各个标签的位置，防止标签间的重叠。
 *     如果不需要开启该策略，例如圆环图这个例子中需要强制所有标签放在中心位置，可以将该值设为 false。
         * @var bool $avoidLabelOverlap
         */
         public  $avoidLabelOverlap  = true  ;

        /**
         * 
 *     
 *     是否在数据和为0（一般情况下所有数据为0） 的时候仍显示扇区。
         * @var bool $stillShowZeroSum
         */
         public  $stillShowZeroSum  = true  ;

        /**
         * 
 *     
 *     饼图百分比数值的精度，默认保留小数点后两位。
         * @var int $percentPrecision
         */
         public  $percentPrecision  = 2 ;

        /**
         * 
 *     
 *     pie chart组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为 left, center, right，组件会根据相应的位置自动对齐。
         * @var string|int $left
         */
         public  $left  = 0 ;

        /**
         * 
 *     
 *     pie chart组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为 top, middle, bottom，组件会根据相应的位置自动对齐。
         * @var string|int $top
         */
         public  $top  = 0 ;

        /**
         * 
 *     
 *     pie chart组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $right
         */
         public  $right  = 0 ;

        /**
         * 
 *     
 *     pie chart组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
         * @var string|int $bottom
         */
         public  $bottom  = 0 ;

        /**
         * 
 *     
 *     pie chart组件的宽度。默认自适应。
         * @var string|int $width
         */
         public  $width  = "auto"  ;

        /**
         * 
 *     
 *     pie chart组件的高度。默认自适应。
         * @var string|int $height
         */
         public  $height  = "auto"  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v5.2.0 开始支持
 *     
 *     是否在无数据的时候显示一个占位圆。
         * @var bool $showEmptyCircle
         */
         public  $showEmptyCircle  = true  ;

        /**
         * 
 *     从 v5.2.0 开始支持
 *     
 *     占位圆样式。
         * @var Series\EmptyCircleStyle $emptyCircleStyle
         */
         public Series\EmptyCircleStyle $emptyCircleStyle  ;

        /**
         * 
 *     
 *     饼图的中心（圆心）坐标，数组的第一项是横坐标，第二项是纵坐标。
 *     支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度。
 *     使用示例：
 *     // 设置成绝对的像素值
 *     center: [400, 300]
 *     // 设置成相对的百分比
 *     center: [50%, 50%]
         * @var array $center
         */
         public  $center  = "[\'50%\', \'50%\']"  ;

        /**
         * 
 *     
 *     饼图的半径。可以为如下类型：
 *     
 *     number：直接指定外半径值。
 *     string：例如，20%，表示外半径为可视区尺寸（容器高宽中较小一项）的 20% 长度。
 *     
 *     
 *     Array.&lt;number|string&gt;：数组的第一项是内半径，第二项是外半径。每一项遵从上述 number string 的描述。
 *     
 *     可以将内半径设大显示成圆环图（Donut chart）。
         * @var int|string|array $radius
         */
         public  $radius  = "[0, \'75%\']"  ;

        /**
         * 
 *     
 *     初始动画效果，可选
 *     
 *     expansion 默认沿圆弧展开的效果。
 *     scale 缩放效果，配合设置 animationEasing=elasticOut 可以做成 popup 的效果。
         * @var string $animationType
         */
         public  $animationType  = "expansion"  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v4.4.0 开始支持
 *     
 *     更新数据时的动画效果，可选：
 *     
 *     transition 通过改变起始和终止角度，从之前的数据过渡到新的数据。
 *     expansion 数据将整体重新沿圆弧展开。
         * @var string $animationTypeUpdate
         */
         public  $animationTypeUpdate  = "transition"  ;

        /**
         * 
 *     
 *     特效类型，目前只支持涟漪特效ripple。
         * @var string $effectType
         */
         public  $effectType  = "ripple"  ;

        /**
         * 
 *     
 *     配置何时显示特效。
 *     可选：
 *     
 *     render 绘制完成后显示特效。
 *     emphasis 高亮（hover）的时候显示特效。
         * @var string $showEffectOn
         */
         public  $showEffectOn  = "render"  ;

        /**
         * 涟漪特效相关配置。
         * @var Series\RippleEffect $rippleEffect
         */
         public Series\RippleEffect $rippleEffect  ;

        /**
         * 雷达图所使用的 radar 组件的 index。
         * @var int $radarIndex
         */
         public  $radarIndex  ;

        /**
         * 当前视角的缩放比例。
         * @var int $zoom
         */
         public  $zoom  = 1 ;

        /**
         * 
 *     
 *     树图的布局，有 正交 和 径向 两种。这里的 正交布局 就是我们通常所说的 水平 和 垂直 方向，对应的参数取值为 orthogonal 。而 径向布局 是指以根节点为圆心，每一层节点为环，一层层向外发散绘制而成的布局，对应的参数取值为 radial 。
 *     正交布局示例：
 *     
 *     
 *     
 *     
 *     径向布局示例：
         * @var string $layout
         */
         public  $layout  = "orthogonal"  ;

        /**
         * 
 *     
 *     树图中 正交布局 的方向，也就是说只有在 layout = orthogonal 的时候，该配置项才生效。对应有 水平 方向的 从左到右，从右到左；以及垂直方向的 从上到下，从下到上。取值分别为 LR , RL, TB, BT。注意，之前的配置项值 horizontal 等同于 LR， vertical 等同于 TB。
         * @var string $orient
         */
         public  $orient  = "LR"  ;

        /**
         * 
 *     
 *     
 *     
 *     
 *     从 v4.7.0 开始支持
 *     
 *     树图在 正交布局 下，边的形状。分别有曲线和折线两种，对应的取值是 curve 和 polyline.
 *     注意：该配置项只在 正交布局 下有效，在经向布局下的开发环境中会报错。
         * @var string $edgeShape
         */
         public  $edgeShape  = "curve"  ;

        /**
         * 
 *     
 *     正交布局下当边的形状是折线时，子树中折线段分叉的位置。这里的位置指的是分叉点与子树父节点的距离占整个子树高度的百分比。默认取值是 50%，可以是 [0, 100%] 之间。
 *     注意：该配置项只有在 edgeShape = polyline 时才有效。
         * @var string $edgeForkPosition
         */
         public  $edgeForkPosition  = "50%"  ;

        /**
         * 
 *     
 *     是否开启鼠标缩放和平移漫游。默认不开启。如果只想要开启缩放或者平移，可以设置成 scale 或者 move。设置成 true 为都开启
         * @var bool|string $roam
         */
         public  $roam  = false  ;

        /**
         * 
 *     
 *     子树折叠和展开的交互，默认打开 。由于绘图区域是有限的，而通常一个树图的节点可能会比较多，这样就会出现节点之间相互遮盖的问题。为了避免这一问题，可以将暂时无关的子树折叠收起，等到需要时再将其展开。如上面径向布局树图示例，节点中心用蓝色填充的就是折叠收起的子树，可以点击将其展开。
 *     注意：如果配置自定义的图片作为节点的标记，是无法通过填充色来区分当前节点是否有折叠的子树的。而目前暂不支持，上传两张图片分别表示节点折叠和展开两种状态。所以，如果想明确地显示节点的两种状态，建议使用 ECharts 常规的标记类型，如 emptyCircle 等。
         * @var bool $expandAndCollapse
         */
         public  $expandAndCollapse  = true  ;

        /**
         * 
 *     
 *     树图初始展开的层级（深度）。根节点是第 0 层，然后是第 1 层、第 2 层，... ，直到叶子节点。该配置项主要和 折叠展开 交互一起使用，目的还是为了防止一次展示过多节点，节点之间发生遮盖。如果设置为 -1 或者 null 或者 undefined，所有节点都将展开。
         * @var int $initialTreeDepth
         */
         public  $initialTreeDepth  = 2 ;

        /**
         * 叶子节点的特殊配置，如上面的树图实例中，叶子节点和非叶子节点的标签位置不同。
         * @var Series\Leaves $leaves
         */
         public Series\Leaves $leaves  ;

        /**
         * 
 *     
 *     期望矩形长宽比率。布局计算时会尽量向这个比率靠近。
 *     默认为黄金比：0.5 * (1 + Math.sqrt(5))。
         * @var int $squareRatio
         */
         public  $squareRatio  ;

        /**
         * 
 *     
 *     设置了 leafDepth 后，下钻（drill down）功能开启。drill down 功能即点击后才展示子层级。
 *     leafDepth 表示『展示几层』，层次更深的节点则被隐藏起来。点击则可下钻看到层次更深的节点。
 *     例如，leafDepth 设置为 1，表示展示一层节点。
 *     默认没有开启 drill down（即 leafDepth 为 null 或 undefined）。
 *     drill down 的例子：
         * @var int $leafDepth
         */
         public  $leafDepth  ;

        /**
         * 当节点可以下钻时的提示符。只能是字符。
         * @var string $drillDownIcon
         */
         public  $drillDownIcon  = "▶"  ;

        /**
         * 点击节点后的行为。可取值为：
 *     
 *     false：节点点击无反应。
 *     zoomToNode：点击节点后缩放到节点。
 *     link：如果节点数据中有 link 点击节点后会进行超链接跳转。
         * @var bool|string $nodeClick
         */
         public  $nodeClick  = "zoomToNode"  ;

        /**
         * 
 *     
 *     点击某个节点，会自动放大那个节点到合适的比例（节点占可视区域的面积比例），这个配置项就是这个比例。
         * @var int $zoomToNodeRatio
         */
         public  $zoomToNodeRatio  = "0.32*0.32"  ;

        /**
         * treemap 中支持对数据其他维度进行视觉映射。
 *     首先，treemap的数据格式（参见 series-treemap.data）中，每个节点的 value 都可以是数组。数组每项是一个『维度』（dimension）。visualDimension 指定了额外的『视觉映射』使用的是数组的哪一项。默认为第 0 项。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 visualDimension 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var int $visualDimension
         */
         public  $visualDimension  = 0 ;

        /**
         * 
 *     
 *     当前层级的最小 value 值。如果不设置则自动统计。
 *     手动指定 visualMin、visualMax ，即手动控制了 visual mapping 的值域（当 colorMappingBy 为 value 时有意义）。
         * @var int $visualMin
         */
         public  $visualMin  ;

        /**
         * 
 *     
 *     当前层级的最大 value 值。如果不设置则自动统计。
 *     手动指定 visualMin、visualMax ，即手动控制了 visual mapping 的值域（当 colorMappingBy 为 value 时有意义）。
         * @var int $visualMax
         */
         public  $visualMax  ;

        /**
         * 本系列默认的颜色透明度选取范围。
 *     数值范围 0 ~ 1
 *     例如, colorAlpha 可以是 [0.3, 1].
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 colorAlpha 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var array $colorAlpha
         */
         public  $colorAlpha  ;

        /**
         * 本系列默认的节点的颜色饱和度 选取范围。
 *     数值范围 0 ~ 1。
 *     例如, colorSaturation 可以是 [0.3, 1].
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 colorSaturation 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var int $colorSaturation
         */
         public  $colorSaturation  ;

        /**
         * 
 *     
 *     表示同一层级节点，在颜色列表中（参见 color 属性）选择时，按照什么来选择。可选值：
 *     
 *     value：
 *     
 *     将节点的值（即 series-treemap.data.value）映射到颜色列表中。
 *     这样得到的颜色，反应了节点值的大小。
 *     可以使用 visualDimension 属性来设置，用 data 中哪个纬度的值来映射。
 *     
 *     index：
 *     
 *     将节点的 index（序号）映射到颜色列表中。即同一层级中，第一个节点取颜色列表中第一个颜色，第二个节点取第二个。
 *     这样得到的颜色，便于区分相邻节点。
 *     
 *     id：
 *     
 *     将节点的 id（即 series-treemap.data.id）映射到颜色列表中。id 是用户指定的，这样能够使得，在treemap 通过 setOption 变化数值时，同一 id 映射到同一颜色，保持一致性。参见 例子。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 colorMappingBy 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var string $colorMappingBy
         */
         public  $colorMappingBy  = "index"  ;

        /**
         * 
 *     
 *     如果某个节点的矩形的面积，小于这个数值（单位：px平方），这个节点就不显示。
 *     如果不加这个限制，很小的节点会影响显示效果。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 visibleMin 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var int $visibleMin
         */
         public  $visibleMin  = 10 ;

        /**
         * 
 *     
 *     如果某个节点的矩形面积，小于这个数值（单位：px平方），则不显示这个节点的子节点。
 *     这能够在矩形面积不足够大时候，隐藏节点的细节。当用户用鼠标缩放节点时，如果面积大于此阈值，又会显示子节点。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     注：treemap中 childrenVisibleMin 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var int $childrenVisibleMin
         */
         public  $childrenVisibleMin  ;

        /**
         * upperLabel 用于显示矩形的父节点的标签。当 upperLabel.show 为 true 的时候，『显示父节点标签』功能开启。
 *     同 series-treemap.label 一样，upperLabel 可以存在于 series-treemap 的根节点，或者 series-treemap.level 中，或者 series-treemap.data 的每个数据项中。
 *     series-treemap.label 描述的是，当前节点为叶节点时标签的样式；upperLabel 描述的是，当前节点为非叶节点（即含有子节点）时标签的样式。（此时标签一般会被显示在节点的最上部）
 *     参见：
 *     
 *     
 *     
 *     
 *     
 *     
 *     注：treemap中 label 属性可能在多处地方存在：
 *     
 *     
 *     
 *     于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     
 *     
 *     于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
         * @var Series\UpperLabel $upperLabel
         */
         public Series\UpperLabel $upperLabel  ;

        /**
         * 面包屑，能够显示当前节点的路径。
         * @var Series\Breadcrumb $breadcrumb
         */
         public Series\Breadcrumb $breadcrumb  ;

        /**
         * 多层配置
 *     treemap 中采用『三级配置』：
 *     『每个节点』-&gt;『每个层级』-&gt;『每个系列』。
 *     即我们可以对每个节点进行配置，也可以对树的每个层级进行配置，也可以 series 上设置全局配置。节点上的设置，优先级最高。
 *     最常用的是『每个层级进行配置』，levels 配置项就是每个层级的配置。例如：
 *     // Notice that in fact the data structure is not tree, but is forest.
 *     // 注意，这个数据结构实际不是『树』而是『森林』
 *     data: [
 *         {
 *             name: nodeA,
 *             children: [
 *                 {name: nodeAA},
 *                 {name: nodeAB},
 *             ]
 *         },
 *         {
 *             name: nodeB,
 *             children: [
 *                 {name: nodeBA}
 *             ]
 *         }
 *     ],
 *     levels: [
 *         {...}, // 『森林』的顶层配置。即含有 nodeA, nodeB 的这层。
 *         {...}, // 下一层配置，即含有 nodeAA, nodeAB, nodeBA 的这层。
 *         {...}, // 再下一层配置。
 *         ...
 *     ]
 *     
 *     视觉映射的规则
 *     treemap中首要关注的是如何在视觉上较好得区分『不同层级』、『同层级中不同类别』。这需要合理得设置不同层级的『矩形颜色』、『边界粗细』、『边界颜色』甚至『矩形颜色饱和度』等。
 *     参见这个例子，最顶层级用颜色区分，分成了『红』『绿』『蓝』等大块。每个颜色块中是下一个层级，使用颜色的饱和度来区分（参见 colorSaturation）。最外层的矩形边界是『白色』，下层级的矩形边界是当前区块颜色加上饱和度处理（参见 borderColorSaturation）。
 *     treemap 是通过这样的规则来支持这种配置的：每个层级计算用户配置的 color、colorSaturation、borderColor、borderColorSaturation等视觉信息（在levels中配置）。如果子节点没有配置，则继承父的配置，否则使用自己的配置）。
 *     这样，可以做到：父层级配置 color 列表，子层级配置 colorSaturation。父层级的每个节点会从 color 列表中得到一个颜色，子层级的节点会从 colorSaturation 中得到一个值，并且继承父节点得到的颜色，合成得到自己的最终颜色。
 *     维度与『额外的视觉映射』
 *     例子：每一个 value 字段是一个 Array，其中每个项对应一个维度（dimension）。
 *     [
 *         {
 *             value: [434, 6969, 8382],
 *             children: [
 *                 {
 *                     value: [1212, 4943, 5453],
 *                     id: someid-1,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 {
 *                     value: [4545, 192, 439],
 *                     id: someid-2,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 ...
 *             ]
 *         },
 *         {
 *             value: [23, 59, 12],
 *             children: [...]
 *         },
 *         ...
 *     ]
 *     
 *     treemap 默认把第一个维度（Array 第一项）映射到『面积』上。而如果想表达更多信息，用户可以把其他的某一个维度（series-treemap.visualDimension），映射到其他的『视觉元素』上，比如颜色明暗等。参见例子中，legend选择 Growth时的状态。
 *     矩形边框（border）/缝隙（gap）设置如何避免混淆
 *     如果统一用一种颜色设置矩形的缝隙（gap），那么当不同层级的矩形同时展示时可能会出现混淆。
 *     参见 例子，注意其中红色的区块中的子矩形其实是更深层级，和其他用白色缝隙区分的矩形不是在一个层级。所以，红色区块中矩形的分割线的颜色，我们在 borderColorSaturation 中设置为『加了饱和度变化的红颜色』，以示区别。
 *     borderWidth, gapWidth, borderColor 的解释
         * @var array $levels
         */
         public  $levels  ;

        /**
         * 
 *     
 *     扇形块根据数据 value 的排序方式，如果未指定 value，则其值为子元素 value 之和。默认值 desc 表示降序排序；还可以设置为 asc 表示升序排序；null 表示不排序，使用原始数据的顺序；或者用回调函数进行排列：
 *     function(nodeA, nodeB) {
 *         return nodeA.getValue() - nodeB.getValue();
 *     }
         * @var string|callable $sort
         */
         public  $sort  = "desc"  ;

        /**
         * 
 *     
 *     如果数据没有 name，是否需要渲染文字。
         * @var bool $renderLabelForZeroData
         */
         public  $renderLabelForZeroData  = false  ;

        /**
         * 是否开启 hover 在 box 上的动画效果。
         * @var bool $hoverAnimation
         */
         public  $hoverAnimation  = true  ;

        /**
         * 
 *     
 *     box 的宽度的上下限。数组的意思是：[min, max]。
 *     可以是绝对数值，如 [7, 50]，也可以是百分比，如 [40%, 90%]。百分比的意思是，最大可能宽度（bandWidth）的百分之多少。
         * @var array $boxWidth
         */
         public  $boxWidth  = "[7, 50]"  ;

        /**
         * 每个点的大小，在地理坐标系(coordinateSystem: geo)上有效。
         * @var int $pointSize
         */
         public  $pointSize  = 20 ;

        /**
         * 每个点模糊的大小，在地理坐标系(coordinateSystem: geo)上有效。
         * @var int $blurSize
         */
         public  $blurSize  = 20 ;

        /**
         * 最小的透明度，在地理坐标系(coordinateSystem: geo)上有效。
         * @var int $minOpacity
         */
         public  $minOpacity  = 0 ;

        /**
         * 最大的透明度，在地理坐标系(coordinateSystem: geo)上有效。
         * @var int $maxOpacity
         */
         public  $maxOpacity  = 1 ;

        /**
         * 使用 registerMap 注册的地图名称。
 *     geoJSON 引入示例
 *     $.get(map/china_geo.json, function (geoJson) {
 *         echarts.registerMap(china, {geoJSON: geoJson});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: china,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     也参见示例 USA Population Estimates。
 *     如上所示，ECharts 可以使用 GeoJSON 格式的数据作为地图的轮廓，你可以获取第三方的 GeoJSON 数据注册到 ECharts 中。例如第三方资源 maps。
 *     SVG 引入示例
 *     $.get(map/topographic_map.svg, function (svg) {
 *         echarts.registerMap(topo, {svg: svg});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: topo,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     也参见示例 Beef Cuts。
 *     如上所示，ECharts 也可以使用 SVG 格式的地图。详情参见：SVG 底图。
         * @var string $map
         */
         public  $map  = ""  ;

        /**
         * 
 *     从 v5.3.0 开始支持
 *     
 *     自定义地图投影，至少需要提供project, unproject两个方法分别用来计算投影后的坐标以及计算投影前的坐标。
 *     比如墨卡托投影：
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; [point[0] / 180 * Math.PI, -Math.log(Math.tan((Math.PI / 2 + point[1] / 180 * Math.PI) / 2))],
 *             unproject: (point) =&gt; [point[0] * 180 / Math.PI, 2 * 180 / Math.PI * Math.atan(Math.exp(point[1])) - 90]
 *         }
 *     }
 *     
 *     除了我们自己实现投影公式，我们也可以使用 d3-geo 等第三方库提供的现成的投影实现：
 *     const projection = d3.geoConicEqualArea();
 *     // ...
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; projection(point),
 *             unproject: (point) =&gt; projection.invert(point)
 *         }
 *     }
 *     
 *     注：自定义投影只有在使用GeoJSON作为数据源的时候有用。
         * @var Series\Projection $projection
         */
         public Series\Projection $projection  ;

        /**
         * 这个参数用于 scale 地图的长宽比，如果设置了projection则无效。
 *     最终的 aspect 的计算方式是：geoBoundingRect.width / geoBoundingRect.height * aspectScale。
         * @var int $aspectScale
         */
         public  $aspectScale  = 0.75 ;

        /**
         * 二维数组，定义定位的左上角以及右下角分别所对应的经纬度。例如
 *     // 设置为一张完整经纬度的世界地图
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // 定位左上角经纬度
 *         [-180, 90],
 *         // 定位右下角经纬度
 *         [180, -90]
 *     ],
         * @var array $boundingCoords
         */
         public  $boundingCoords  ;

        /**
         * 滚轮缩放的极限控制，通过min, max最小和最大的缩放值，默认的缩放为1。
         * @var Series\ScaleLimit $scaleLimit
         */
         public Series\ScaleLimit $scaleLimit  ;

        /**
         * 自定义地区的名称映射，如：
 *     {
 *         China : 中国
 *     }
         * @var array $nameMap
         */
         public  $nameMap  ;

        /**
         * 
 *     从 v4.8.0 开始支持
 *     
 *     默认是 name，针对 GeoJSON 要素的自定义属性名称，作为主键用于关联数据点和 GeoJSON 地理要素。
 *     例如：
 *     {
 *         nameProperty: NAME, // 数据点中的 name：Alabama 会关联到 GeoJSON 中 NAME 属性值为 Alabama 的地理要素{type:Feature,id:01,properties:{NAME:Alabama}, geometry: { ... }}
 *         data:[
 *             {name: Alabama, value: 4822023},
 *             {name: Alaska, value: 731449},
 *         ]
 *     }
         * @var string $nameProperty
         */
         public  $nameProperty  = "name"  ;

        /**
         * layoutCenter 和 layoutSize 提供了除了 left/right/top/bottom/width/height 之外的布局手段。
 *     在使用 left/right/top/bottom/width/height 的时候，可能很难在保持地图高宽比的情况下把地图放在某个盒形区域的正中间，并且保证不超出盒形的范围。此时可以通过 layoutCenter 属性定义地图中心在屏幕中的位置，layoutSize 定义地图的大小。如下示例
 *     layoutCenter: [30%, 30%],
 *     // 如果宽高比大于 1 则宽度为 100，如果小于 1 则高度为 100，保证了不超过 100x100 的区域
 *     layoutSize: 100
 *     
 *     设置这两个值后 left/right/top/bottom/width/height 无效。
         * @var array $layoutCenter
         */
         public  $layoutCenter  ;

        /**
         * 地图的大小，见 layoutCenter。支持相对于屏幕宽高的百分比或者绝对的像素大小。
         * @var int|string $layoutSize
         */
         public  $layoutSize  ;

        /**
         * 多个拥有相同地图类型的系列会使用同一个地图展现，如果多个系列都在同一个区域有值，ECharts 会对这些值统计得到一个数据。这个配置项就是用于配置统计的方式，目前有：
 *     
 *     sum   取和。
 *     average 取平均值。
 *     max   取最大值。
 *     min   取最小值。
         * @var string $mapValueCalculation
         */
         public  $mapValueCalculation  = "sum"  ;

        /**
         * 在图例相应区域显示图例的颜色标识（系列标识的小圆点），存在 legend 组件时生效。
         * @var bool $showLegendSymbol
         */
         public  $showLegendSymbol  ;

        /**
         * 使用的平行坐标系的 index，在单个图表实例中存在多个平行坐标系的时候有用。
         * @var int $parallelIndex
         */
         public  $parallelIndex  = 0 ;

        /**
         * 
 *     
 *     框选时，未被选中的条线会设置成这个『透明度』（从而可以达到变暗的效果）。
         * @var int $inactiveOpacity
         */
         public  $inactiveOpacity  = 0.05 ;

        /**
         * 
 *     
 *     框选时，选中的条线会设置成这个『透明度』（从而可以达到高亮的效果）。
         * @var int $activeOpacity
         */
         public  $activeOpacity  = 1 ;

        /**
         * 
 *     
 *     是否实时刷新。
         * @var bool $realtime
         */
         public  $realtime  = true  ;

        /**
         * 是否是多段线。
 *     默认为 false，只能用于绘制只有两个端点的线段，线段可以通过 lineStyle.curveness 配置为曲线。
 *     如果该配置项为 true，则可以在 data.coords 中设置多于 2 个的顶点用来绘制多段线，在绘制路线轨迹的时候比较有用，见示例 北京公交路线，设置为多段线后 lineStyle.curveness 无效。
         * @var bool $polyline
         */
         public  $polyline  = false  ;

        /**
         * 线特效的配置，见示例 模拟迁徙 和 北京公交路线
 *     注意： 所有带有尾迹特效的图表需要单独放在一个层，也就是需要单独设置 zlevel，同时建议关闭该层的动画（animation: false）。不然位于同个层的其它系列的图形，和动画的标签也会产生不必要的残影。
         * @var Series\Effect $effect
         */
         public Series\Effect $effect  ;

        /**
         * 环形布局相关配置
         * @var Series\Circular $circular
         */
         public Series\Circular $circular  ;

        /**
         * 力引导布局相关的配置项，力引导布局是模拟弹簧电荷模型在每两个节点之间添加一个斥力，每条边的两个节点之间添加一个引力，每次迭代节点会在各个斥力和引力的作用下移动位置，多次迭代后节点会静止在一个受力平衡的位置，达到整个模型的能量最小化。
 *     力引导布局的结果有良好的对称性和局部聚合性，也比较美观。
         * @var Series\Force $force
         */
         public Series\Force $force  ;

        /**
         * 
 *     
 *     鼠标漫游缩放时节点的相应缩放比例，当设为0时节点不随着鼠标的缩放而缩放
         * @var int $nodeScaleRatio
         */
         public  $nodeScaleRatio  = 0.6 ;

        /**
         * 
 *     
 *     节点是否可拖拽。
 *     注意：v5.4.1 之前的版本只在使用力引导布局的时候才有用。
         * @var bool $draggable
         */
         public  $draggable  = false  ;

        /**
         * 边两端的标记类型，可以是一个数组分别指定两端，也可以是单个统一指定。默认不显示标记，常见的可以设置为箭头，如下：
 *     edgeSymbol: [circle, arrow]
         * @var array|string $edgeSymbol
         */
         public  $edgeSymbol  = "[\'none\', \'none\']"  ;

        /**
         * 
 *     
 *     边两端的标记大小，可以是一个数组分别指定两端，也可以是单个统一指定。
         * @var array|int $edgeSymbolSize
         */
         public  $edgeSymbolSize  = 10 ;

        /**
         * 
         * @var Series\EdgeLabel $edgeLabel
         */
         public Series\EdgeLabel $edgeLabel  ;

        /**
         * 节点分类的类目，可选。
 *     如果节点有分类的话可以通过 data[i].category 指定每个节点的类目，类目的样式会被应用到节点样式上。图例也可以基于categories名字展现和筛选。
         * @var array $categories
         */
         public  $categories  ;

        /**
         * 针对节点之间存在多边的情况，自动计算各边曲率，默认不开启。
 *     设置为 true 时，开启自动曲率计算，默认边曲率数组长度为 20，如果两点间边数大于 20，请使用 number 或 Array 设置边曲率数组。
 *     设置为 number 时，表示两点间边曲率数组的长度，由内部算法给出计算结果。
 *     设置为 Array 时，表示直接指定边曲率数组，多边曲率会从数组中直接按顺序选取。
 *     注意： 如果设置 lineStyle.curveness 则此属性失效。
         * @var bool|int|array $autoCurveness
         */
         public  $autoCurveness  = false  ;

        /**
         * 别名，同 data
         * @var array $nodes
         */
         public  $nodes  ;

        /**
         * 节点间的关系数据。示例：
 *     links: [{
 *         source: n1,
 *         target: n2
 *     }, {
 *         source: n2,
 *         target: n3
 *     }]
         * @var array $links
         */
         public  $links  ;

        /**
         * 别名，同 links
         * @var array $edges
         */
         public  $edges  ;

        /**
         * 
 *     
 *     桑基图中每个矩形节点的宽度。
         * @var int $nodeWidth
         */
         public  $nodeWidth  = 20 ;

        /**
         * 
 *     
 *     桑基图中每一列任意两个矩形节点之间的间隔。
         * @var int $nodeGap
         */
         public  $nodeGap  = 8 ;

        /**
         * 
 *     
 *     桑基图中节点的对齐方式，默认是双端对齐，可以设置为左对齐或右对齐，对应的值分别是：
 *     
 *     justify: 节点双端对齐。
 *     left: 节点左对齐。
 *     right: 节点右对齐。
         * @var string $nodeAlign
         */
         public  $nodeAlign  = "justify"  ;

        /**
         * 
 *     
 *     布局的迭代次数，目的是不断迭代优化图中节点和边的位置，以减少节点和边之间的相互遮盖，默认值是 32。如果希望图中节点的顺序是按照原始 data 中的顺序排列的，可设该值为 0。
         * @var int $layoutIterations
         */
         public  $layoutIterations  = 32 ;

        /**
         * 
 *     
 *     指定的数据最小值。
         * @var int $min
         */
         public  $min  = 0 ;

        /**
         * 
 *     
 *     指定的数据最大值。
         * @var int $max
         */
         public  $max  = 100 ;

        /**
         * 
 *     
 *     数据最小值 min 映射的宽度。
 *     可以是绝对的像素大小，也可以是相对布局宽度的百分比，如果需要最小值的图形并不是尖端三角，可通过设置该属性实现。
         * @var int|string $minSize
         */
         public  $minSize  = "0%"  ;

        /**
         * 
 *     
 *     数据最大值 max 映射的宽度。
 *     可以是绝对的像素大小，也可以是相对布局宽度的百分比。
         * @var int|string $maxSize
         */
         public  $maxSize  = "100%"  ;

        /**
         * 
 *     
 *     数据图形间距。
         * @var int $gap
         */
         public  $gap  = 0 ;

        /**
         * 
 *     
 *     水平方向对齐布局类型，默认居中对齐，可用选项还有：left | right | center
         * @var string $funnelAlign
         */
         public  $funnelAlign  = "center"  ;

        /**
         * 
 *     
 *     仪表盘结束角度。
         * @var int $endAngle
         */
         public  $endAngle  = -45 ;

        /**
         * 
 *     
 *     仪表盘刻度的分割段数。
         * @var int $splitNumber
         */
         public  $splitNumber  = 10 ;

        /**
         * 仪表盘轴线相关配置。
         * @var Series\AxisLine $axisLine
         */
         public Series\AxisLine $axisLine  ;

        /**
         * 
 *     从 v5.0 开始支持
 *     
 *     展示当前进度。
         * @var Series\Progress $progress
         */
         public Series\Progress $progress  ;

        /**
         * 分隔线样式。
         * @var Series\SplitLine $splitLine
         */
         public Series\SplitLine $splitLine  ;

        /**
         * 刻度样式。
         * @var Series\AxisTick $axisTick
         */
         public Series\AxisTick $axisTick  ;

        /**
         * 刻度标签。
         * @var Series\AxisLabel $axisLabel
         */
         public Series\AxisLabel $axisLabel  ;

        /**
         * 仪表盘指针。
         * @var Series\Pointer $pointer
         */
         public Series\Pointer $pointer  ;

        /**
         * 
 *     从 v5.0 开始支持
 *     
 *     表盘中指针的固定点。
         * @var Series\Anchor $anchor
         */
         public Series\Anchor $anchor  ;

        /**
         * 仪表盘标题。
         * @var Series\Title $title
         */
         public Series\Title $title  ;

        /**
         * 仪表盘详情，用于显示数据。
         * @var Series\Detail $detail
         */
         public Series\Detail $detail  ;

        /**
         * 
 *     
 *     图形的定位位置。可取值：
 *     
 *     start：图形边缘与柱子开始的地方内切。
 *     end：图形边缘与柱子结束的地方内切。
 *     center：图形在柱子里居中。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolPosition: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPosition: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolPosition: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var string $symbolPosition
         */
         public  $symbolPosition  = "start"  ;

        /**
         * 
 *     
 *     指定图形元素是否重复。值可为：
 *     
 *     false/null/undefined：不重复，即每个数据值用一个图形元素表示。
 *     true：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数依据 data 计算得到。
 *     a number：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数是给定的定值。
 *     fixed：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数依据 symbolBoundingData 计算得到，即与 data 无关。这在此图形被用于做背景时有用。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolRepeat: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeat: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolRepeat: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var bool|int|string $symbolRepeat
         */
         public  $symbolRepeat  ;

        /**
         * 
 *     
 *     指定图形元素重复时，绘制的顺序。这个属性在两种情况下有用处：
 *     
 *     当 symbolMargin 设置为负值时，重复的图形会互相覆盖，这是可以使用 symbolRepeatDirection 来指定覆盖顺序。
 *     
 *     当 animationDelay 或 animationDelayUpdate 被使用时，symbolRepeatDirection 指定了 index 顺序。
 *     
 *     
 *     这个属性的值可以是：start 或 end。
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolRepeatDirection: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeatDirection: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolRepeatDirection: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var string $symbolRepeatDirection
         */
         public  $symbolRepeatDirection  = "start"  ;

        /**
         * 
 *     
 *     图形的两边间隔（『两边』是指其数值轴方向的两边）。可以是绝对数值（如 20），或者百分比值（如 -30%），表示相对于自身尺寸 symbolSize 的百分比。只有当 symbolRepeat 被使用时有意义。
 *     可以是正值，表示间隔大；也可以是负数。当 symbolRepeat 被使用时，负数时能使图形重叠。
 *     可以在其值结尾处加一个 !，如 30%! 或 25!，表示第一个图形的开始和最后一个图形结尾留白，不紧贴边界。默认会紧贴边界。
 *     注意：
 *     
 *     当 symbolRepeat 为 true/fixed 的时候：
 *       这里设置的 symbolMargin 只是个参考值，真正最后的图形间隔，是根据 symbolRepeat、symbolMargin、symbolBoundingData 综合计算得到。
 *     当 symbolRepeat 为一个固定数值的时候：
 *       这里设置的 symbolMargin 无效。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolMargin: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolMargin: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolMargin: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var int|string $symbolMargin
         */
         public  $symbolMargin  ;

        /**
         * 
 *     
 *     是否剪裁图形。
 *     
 *     false/null/undefined：图形本身表示数值大小。
 *     true：图形被剪裁后剩余的部分表示数值大小。
 *     
 *     symbolClip 常在这种场景下使用：同时表达『总值』和『当前数值』。在这种场景下，可以使用两个系列，一个系列是完整的图形，当做『背景』来表达总数值，另一个系列是使用 symbolClip 进行剪裁过的图形，表达当前数值。
 *     例子：
 *     
 *     
 *     
 *     在这个例子中：
 *     
 *     『背景系列』和『当前值系列』使用相同的 symbolBoundingData，使得绘制出的图形的大小是一样的。
 *     『当前值系列』设置了比『背景系列』更高的 z，使得其覆盖在『背景系列』上。
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolClip: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolClip: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolClip: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var bool $symbolClip
         */
         public  $symbolClip  = false  ;

        /**
         * 这个属性是『指定图形界限的值』。它指定了一个 data，这个 data 映射在坐标系上的位置，是图形绘制的界限。也就是说，如果设置了 symbolBoundingData，图形的尺寸则由 symbolBoundingData 决定。
 *     当柱子是水平的，symbolBoundingData 对应到 x 轴上，当柱子是竖直的，symbolBoundingData 对应到 y 轴上。
 *     规则：
 *     
 *     没有使用 symbolRepeat 时：
 *       symbolBoundingData 缺省情况下和『参考柱』的尺寸一样。图形的尺寸由零点和 symbolBoundingData 决定。举例，当柱子是竖直的，柱子对应的 data 为 24，symbolSize 设置为 [30, 50%]，symbolBoundingData 设置为 124，那么最终图形的高度为 124 * 50% = 62。如果 symbolBoundingData 不设置，那么最终图形的高度为 24 * 50% = 12。
 *     
 *     使用了 symbolRepeat 时：
 *       symbolBoundingData 缺省情况取当前坐标系所显示出的最值。symbolBoundingData 定义了一个 bounding，重复的图形在这个 bounding 中，依据 symbolMargin 和 symbolRepeat 和 symbolSize 进行排布。这几个变量决定了图形的间隔大小。
 *     
 *     
 *     在这些场景中，你可能会需要设置 symbolBoundingData：
 *     
 *     使用了 symbolCilp 时：
 *       使用一个系列表达『总值』，另一个系列表达『当前值』的时候，需要两个系列画出的图形一样大。那么就把两个系列的 symbolBoundingData 设为一样大。
 *     
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     使用了 symbolRepeat 时：
 *       如果需要不同柱子中的图形的间隔保持一致，那么可以把 symbolBoundingData 设为一致的数值。当然，不设置 symbolBoundingData 也是可以的，因为其缺省值就是一个定值（坐标系所显示出的最值）。
 *     
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     symbolBoundingData 可以是一个数组，例如 [-40, 60]，表示同时指定了正值的 symbolBoundingData 和负值的 symbolBoundingData。
 *     参见例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolBoundingData: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolBoundingData: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolBoundingData: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var int|array $symbolBoundingData
         */
         public  $symbolBoundingData  ;

        /**
         * 
 *     
 *     可以使用图片作为图形的 pattern。
 *     var textureImg = new Image();
 *     textureImg.src = data:image/jpeg;base64,...; // dataURI
 *     // 或者
 *     // textureImg.src = http://example.website/xx.png; // URL
 *     ...
 *     itemStyle: {
 *         color: {
 *             image: textureImg,
 *             repeat: repeat
 *         }
 *     }
 *     
 *     这时候，symbolPatternSize 指定了 pattern 的缩放尺寸。比如 symbolPatternSize 为 400 时表示图片显示为 400px * 400px 的尺寸。
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolPatternSize: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPatternSize: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolPatternSize: ... // 只对此数据项生效
 *         }]
 *     }]
         * @var int $symbolPatternSize
         */
         public  $symbolPatternSize  = 400 ;

        /**
         * 图中与坐标轴正交的方向的边界间隙，设置该值是为了调整图的位置，使其尽量处于屏幕的正中间，避免处于屏幕的上方或下方。
         * @var array $boundaryGap
         */
         public  $boundaryGap  = ["10%", "10%"] ;

        /**
         * 单个时间轴的index，默认值为0，因为只有单个轴。
         * @var int $singleAxisIndex
         */
         public  $singleAxisIndex  = 0 ;

        /**
         * custom 系列需要开发者自己提供图形渲染的逻辑。这个渲染逻辑一般命名为 renderItem。例如：
 *     var option = {
 *         ...,
 *         series: [{
 *             type: custom,
 *             renderItem: function (params, api) {
 *                 var categoryIndex = api.value(0);
 *                 var start = api.coord([api.value(1), categoryIndex]);
 *                 var end = api.coord([api.value(2), categoryIndex]);
 *                 var height = api.size([0, 1])[1] * 0.6;
 *     
 *                 var rectShape = echarts.graphic.clipRectByRect({
 *                     x: start[0],
 *                     y: start[1] - height / 2,
 *                     width: end[0] - start[0],
 *                     height: height
 *                 }, {
 *                     x: params.coordSys.x,
 *                     y: params.coordSys.y,
 *                     width: params.coordSys.width,
 *                     height: params.coordSys.height
 *                 });
 *     
 *                 return rectShape &amp;&amp; {
 *                     type: rect,
 *                     shape: rectShape,
 *                     style: api.style()
 *                 };
 *             },
 *             data: data
 *         }]
 *     }
 *     
 *     对于 data 中的每个数据项（为方便描述，这里称为 dataItem)，会调用此 renderItem 函数。
 *     renderItem 函数提供了两个参数：
 *     
 *     params：包含了当前数据信息和坐标系的信息。
 *     api：是一些开发者可调用的方法集合。
 *     
 *     renderItem 函数须返回根据此 dataItem 绘制出的图形元素的定义信息，参见 renderItem.return。
 *     一般来说，renderItem 函数的主要逻辑，是将 dataItem 里的值映射到坐标系上的图形元素。这一般需要用到 renderItem.arguments.api 中的两个函数：
 *     
 *     api.value(...)，意思是取出 dataItem 中的数值。例如 api.value(0) 表示取出当前 dataItem 中第一个维度的数值。
 *     api.coord(...)，意思是进行坐标转换计算。例如 var point = api.coord([api.value(0), api.value(1)]) 表示 dataItem 中的数值转换成坐标系上的点。
 *     
 *     有时候还需要用到 api.size(...) 函数，表示得到坐标系上一段数值范围对应的长度。
 *     返回值中样式的设置可以使用 api.style(...) 函数，他能得到 series.itemStyle 中定义的样式信息，以及视觉映射的样式信息。也可以用这种方式覆盖这些样式信息：api.style({fill: green, stroke: yellow})。
         * @var Series\RenderItem $renderItem
         */
         public Series\RenderItem $renderItem  ;

  

}