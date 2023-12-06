<?php

namespace EchartsJson;

use EchartsJson\Options\AngleAxis;
use EchartsJson\Options\Aria;
use EchartsJson\Options\AxisPointer;
use EchartsJson\Options\Brush;
use EchartsJson\Options\Calendar;
use EchartsJson\Options\Dataset;
use EchartsJson\Options\DataZoom;
use EchartsJson\Options\Geo;
use EchartsJson\Options\Graphic;
use EchartsJson\Options\Grid;
use EchartsJson\Options\Legend;
use EchartsJson\Options\Parallel;
use EchartsJson\Options\ParallelAxis;
use EchartsJson\Options\Polar;
use EchartsJson\Options\Radar;
use EchartsJson\Options\RadiusAxis;
use EchartsJson\Options\Series;
use EchartsJson\Options\SingleAxis;
use EchartsJson\Options\StateAnimation;
use EchartsJson\Options\TextStyle;
use EchartsJson\Options\Timeline;
use EchartsJson\Options\Title;
use EchartsJson\Options\Toolbox;
use EchartsJson\Options\Tooltip;
use EchartsJson\Options\VisualMap;
use EchartsJson\Options\XAxis;
use EchartsJson\Options\YAxis;

/**
 *
 */
class ECharts extends AbstractOption
{
    /**
     * 标题组件，包含主标题和副标题。
     * @var Title 标题组件
     */
    public Title $title;

    /**
     * 图例组件展现了不同系列的标记(symbol)，颜色和名字。可以通过点击图例控制哪些系列不显示。
     *
     * @var Legend 图例组件。
     */
    public Legend $legend;

    /**
     * 直角坐标系内绘图网格，单个 grid 内最多可以放置上下两个 X 轴，左右两个 Y 轴。
     * @var Grid 绘图网格
     */
    public Grid $grid;


    /**
     * X轴内容
     * @var XAxis
     */
    public XAxis $XAxis;

    /**
     * Y轴内容
     * @var YAxis
     */
    public YAxis $YAxis;

    /**
     * 极坐标系
     *
     * @var Polar
     */
    public Polar $polar;

    /**
     *
     * @var RadiusAxis
     */
    public RadiusAxis $radiusAxis;

    /**
     *
     * @var AngleAxis
     */
    public AngleAxis $angleAxis;

    /**
     * 雷达图坐标系组件
     * @var Radar
     */
    public Radar $radar;

    /**
     * 区域缩放
     * @var DataZoom
     */
    public DataZoom $dataZoom;

    /**
     * 视觉映射
     *
     * @var VisualMap
     */
    public VisualMap $visualMap;

    /**
     * 提示框
     * @var Tooltip
     */
    public Tooltip $tooltip;

    /**
     * 坐标轴指示器
     *
     * @var AxisPointer
     */
    public AxisPointer $axisPointer;

    /**
     *
     * @var Toolbox
     */
    public Toolbox $toolbox;

    /**
     * 区域选择组件
     *
     * @var Brush
     */
    public Brush $brush;

    /**
     * 地理坐标系
     * @var Geo
     */
    public Geo $geo;


    /**
     * 平行坐标系
     *
     * @var Parallel
     */
    public Parallel $parallel;

    /**
     * 这个组件是平行坐标系中的坐标轴。
     * @var ParallelAxis
     */
    public ParallelAxis $parallelAxis;


    /**
     * 单轴
     *
     * @var SingleAxis
     */
    public SingleAxis $singleAxis;


    /**
     * 时间线
     *
     * @var Timeline
     */
    public Timeline $timeline;


    /**
     * 原生图形坐标系
     *
     * @var Graphic
     */
    public Graphic $graphic;


    /**
     * 日历坐标系
     *
     * @var Calendar
     */
    public Calendar $calendar;

    /**
     * 单独数据集
     *
     * @var Dataset
     */
    public Dataset $dataset;


    /**
     * 无障碍
     * @var Aria
     */
    public Aria $aria;


    /**
     *
     * @var Series
     */
    public Series $series;

    public bool $darkMode = false;

    /**
     * 可选颜色列表
     *
     * @var array|string[]
     */
    public array $color =['#5470c6', '#91cc75', '#fac858', '#ee6666', '#73c0de', '#3ba272', '#fc8452', '#9a60b4', '#ea7ccc'];

    /**
     * 背景颜色
     *
     * @var string
     */
    public string $backgroundColor;

    /**
     * 全局的字体样式。
     *
     * @var TextStyle
     */
    public TextStyle $textStyle;

    /**
     * 是否开启动画
     *
     * @var bool
     */
    public bool $animation = true;


    /**
     * 开启动画的阈值
     *
     * @var int
     */
    public int $animationThreshold = 2000;


    /**
     * 初始动画时长
     *
     * @var int
     */
    public int $animationDuration = 1000;


    /**
     * 缓动效果
     *
     * @var string
     */
    public string $animationEasing = 'cubicOut';

    /**
     * 初始动画延迟
     *
     * @var int
     */
    public int $animationDelay =0;

    /**
     * 数据更新动画时长
     *
     * @var int
     */
    public int $animationDurationUpdate= 300;

    /**
     * 数据更新,动画缓动效果
     *
     * @var string
     */
    public string $animationEasingUpdate = 'cubicInOut';

    /**
     * 数据更新动画延迟
     *
     * @var int
     */
    public int $animationDelayUpdate = 0;

    /**
     * 状态动画切换
     *
     * @var StateAnimation
     */
    public StateAnimation $stateAnimation;


    /**
     * 图形混合模式
     *
     * @var string
     */
    public string $blendMode = 'source-over';


    /**
     *
     * 图形数量阈值，决定是否开启单独的 hover 层，在整个图表的图形数量大于该阈值时开启单独的 hover 层。
     * @var int
     */
    public int $hoverLayerThreshold = 3000;


    /**
     * 是否启用UTC时间
     *
     * @var bool
     */
    public bool $useUTC = false;

//    public ECUt

//    public Media
}