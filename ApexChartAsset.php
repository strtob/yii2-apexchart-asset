<?php

namespace strtob\yii2apexchartasset;

use yii\web\AssetBundle;
use yii\helpers\Json;

class ApexChartAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/node_modules/';

    public $js = [
        'apexcharts/dist/apexcharts.min.js',
    ];

    public $css = [        
    ];

    public $depends = [
        'yii\web\JqueryAsset', 
    ];

}
