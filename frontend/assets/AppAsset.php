<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    ];
    public $js = [
        'js/script.js',
    ];
    public $depends = [
       // 'yii\web\YiiAsset',
       // 'yii\bootstrap4\BootstrapAsset',
    ];
}
