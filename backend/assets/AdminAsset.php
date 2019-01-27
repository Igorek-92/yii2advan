<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend applcation asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/lib/@fortawesome/fontawesome-free/css/all.min.css',
        'admin/lib/ionicons/css/ionicons.min.css',
        'admin/lib/rickshaw/rickshaw.min.css',
        'admin/lib/select2/css/select2.min.css',
        'admin/css/bracket.css',
        'admin/css/bracket.dark.css',
    ];
    public $js = [
        'admin/lib/jquery-ui/ui/widgets/datepicker.js',
        'admin/lib/bootstrap/js/bootstrap.bundle.min.js',
        'admin/lib/perfect-scrollbar/perfect-scrollbar.min.js',
        'admin/lib/moment/min/moment.min.js',
        'admin/lib/peity/jquery.peity.min.js',
        'admin/lib/rickshaw/vendor/d3.min.js',
        'admin/lib/rickshaw/vendor/d3.layout.min.js',
        'admin/lib/rickshaw/rickshaw.min.js',
        'admin/lib/jquery.flot/jquery.flot.js',
        'admin/lib/jquery.flot/jquery.flot.resize.js',
        'admin/lib/flot-spline/js/jquery.flot.spline.min.js',
        'admin/lib/jquery-sparkline/jquery.sparkline.min.js',
        'admin/lib/echarts/echarts.min.js',
        'admin/lib/select2/js/select2.full.min.js',
        'http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg',
        'admin/lib/gmaps/gmaps.min.js',
        'admin/js/bracket.js',
        'admin/js/map.shiftworker.js',
        'admin/js/ResizeSensor.js',
        'admin/js/dashboard.dark.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
