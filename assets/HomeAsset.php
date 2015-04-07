<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Tommy Manning
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
    	'home/css/style.css',
    	'home/css/responsive.css',    		
    	'home/css/skins/light-blue.css',
        'home/css/site.css',
    	'home/css/revolution_settings.css',
    	'home/css/font-awesome.css',
    	'home/css/axfont.css',
    	'home/css/tipsy.css',
    	'home/css/prettyPhoto.css',
    	'home/css/isotop_animation.css',
    	'home/css/animate.css',
    	'home/css/color-chooser.css',
    	'home/css/bootstrap.css',    		
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $js = [
    	'home/js/site.css',
    	'home/js/_jq.js',    		
    	'home/js/_jquery.placeholder.js',
    	'home/js/activeaxon_menu.js',
    	'home/js/animationEnigne.js',
    	'home/js/bootstrap.min.js',
    	'home/js/ie-fixes.js',
    	'home/js/jq.appear.js',
    	'home/js/jquery.base64.js',
    	'home/js/jquery.carouFredSel-6.2.1-packed.js',
    	'home/js/jquery.cycle.js',
    	'home/js/jquery.cycle2.carousel.js',
    	'home/js/jquery.easing.1.3.js',
    	'home/js/jquery.easytabs.js',
    	'home/js/jquery.infinitescroll.js',
    	'home/js/jquery.isotope.js',
    	'home/js/jquery.prettyPhoto.js',
    	'home/js/jQuery.scrollPoint.js',
    	'home/js/jquery.themepunch.plugins.min.js',
    	'home/js/jquery.themepunch.revolution.js',
    	'home/js/jquery.tipsy.js',
    	'home/js/jquery.validate.js',
    	'home/js/jQuery.XDomainRequest.js',
    	'home/js/kanzi.js',
    	'home/js/retina.js'    		
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
