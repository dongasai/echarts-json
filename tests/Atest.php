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


        $color = ['#c23531','#2f4554', '#61a0a8', '#d48265', '#91c7ae','#749f83',  '#ca8622', '#bda29a','#6e7074', '#546570', '#c4ccd3'];
        shuffle($color);

        $chart->color = $color;



        var_dump($chart->jsonSerialize());



    }

}
