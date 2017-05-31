<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'themes/metronic/css/components.min.css',
		'themes/clean-ui/vendors/bootstrap/dist/css/bootstrap.min.css',
		'themes/clean-ui/vendors/jscrollpane/style/jquery.jscrollpane.css',
		'themes/clean-ui/vendors/nprogress/nprogress.css',
		'themes/clean-ui/vendors/chartist/dist/chartist.min.css',
		'themes/clean-ui/common/css/source/main.css',
		'themes/toaster/toastr.min.css',
		'themes/dev-express/css/dx.common.css',
		'themes/dev-express/css/dx.light.css',
		'css/site.css',
		'css/admin.css',
    ];
    public $js = [
    	'themes/clean-ui/vendors/tether/dist/js/tether.min.js',
   		'themes/clean-ui/vendors/bootstrap/dist/js/bootstrap.min.js',
    	'themes/clean-ui/vendors/html5-form-validation/dist/jquery.validation.min.js',
    	'themes/clean-ui/vendors/bootstrap-show-password/bootstrap-show-password.min.js',
    	'themes/clean-ui/vendors/gsap/src/minified/TweenMax.min.js',
    	'themes/clean-ui/common/js/common.js',
		'js/admin-ajax.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
