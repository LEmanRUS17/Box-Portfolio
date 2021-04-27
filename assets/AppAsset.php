<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ionicons/css/ionicons.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/modernizr.js',
        'js/jquery-2.1.1.js',
        'js/bootstrap.min.js',
        'js/menu.js',
        'js/animated-headline.js',
        'js/isotope.pkgd.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\ionicon\AssetBundle'
    ];
}
