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
        "app/css/bootstrap-scss/bootstrap-grid.min.css",
        "app/libs/slick/slick.css",
        "app/libs/wow/css/libs/animate.css",
        "app/libs/fancybox/jquery.fancybox.min.css",
        "app/libs/aos-master/dist/aos.css",
        "app/scss/style.css",
        "app/scss/media.css",
    ];
    public $js = [
        "app/libs/jquery/jquery.min.js",
        "app/libs/slick/slick.min.js",
        "app/libs/mixitup/mixitup.min.js",
        "app/libs/wow/dist/wow.min.js",
        "app/libs/aos-master/dist/aos.js",
        "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js",
        "app/libs/Counter-Up-master/jquery.counterup.min.js",
        "app/libs/fancybox/jquery.fancybox.min.js",
        "app/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
