<?php

namespace Tests;

use EchartsJson\ECharts;
use Hisune;
use Tests\TestCase1;

class Btest extends TestCase1
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test1()
    {
        $chart = new ECharts();
        $chart->jsonSerialize();
        var_dump($chart);



    }

}
