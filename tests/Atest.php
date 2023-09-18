<?php

namespace Tests;

use EchartsJson\ECharts;
use Hisune;
use Tests\TestCase1;

class Atest extends TestCase1
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test1()
    {


        $chart = new ECharts();
        $xAxis = new \EchartsJson\IDE\XAxis();
        $yAxis = new \EchartsJson\IDE\YAxis();

        $color = ['#c23531','#2f4554', '#61a0a8', '#d48265', '#91c7ae','#749f83',  '#ca8622', '#bda29a','#6e7074', '#546570', '#c4ccd3'];
        shuffle($color);

        $chart->color = $color;
        $chart->tooltip->trigger = 'axis';
        $chart->toolbox->show = true;

        var_dump($chart);



    }

}
