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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'themes/metronic/css/components.min.css',
		'themes/clean-ui/vendors/bootstrap/dist/css/bootstrap.min.css',
		'themes/clean-ui/vendors/jscrollpane/style/jquery.jscrollpane.css',
		'themes/clean-ui/vendors/ladda/dist/ladda-themeless.min.css',
		'themes/clean-ui/vendors/select2/dist/css/select2.min.css',
		'themes/clean-ui/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
		'themes/clean-ui/vendors/fullcalendar/dist/fullcalendar.min.css',
		'themes/clean-ui/vendors/bootstrap-sweetalert/dist/sweetalert.css',
		'themes/clean-ui/vendors/owl.carousel/dist/assets/owl.carousel.min.css',
		'themes/clean-ui/vendors/ionrangeslider/css/ion.rangeSlider.css',
		'themes/clean-ui/vendors/jquery-steps/demo/css/jquery.steps.css',
		'themes/clean-ui/vendors/bootstrap-select/dist/css/bootstrap-select.min.css',
		'themes/clean-ui/vendors/dropify/dist/css/dropify.min.css',
		'themes/clean-ui/vendors/jquery-steps/demo/css/jquery.steps.css',
		'themes/clean-ui/vendors/datatables/media/css/dataTables.bootstrap4.min.css',
		'themes/clean-ui/vendors/c3/c3.min.css',
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
		'themes/clean-ui/vendors/jquery-mousewheel/jquery.mousewheel.min.js',
		'themes/clean-ui/vendors/jscrollpane/script/jquery.jscrollpane.min.js',
		'themes/clean-ui/vendors/spin.js/spin.js',
		'themes/clean-ui/vendors/ladda/dist/ladda.min.js',
		'themes/clean-ui/vendors/html5-form-validation/dist/jquery.validation.min.js',
		'themes/clean-ui/vendors/jquery-mask-plugin/dist/jquery.mask.min.js',
		'themes/clean-ui/vendors/jquery-typeahead/dist/jquery.typeahead.min.js',
		'themes/clean-ui/vendors/select2/dist/js/select2.full.min.js',
		'themes/clean-ui/vendors/autosize/dist/autosize.min.js',
		'themes/clean-ui/vendors/bootstrap-show-password/bootstrap-show-password.min.js',
		'themes/clean-ui/vendors/moment/min/moment.min.js',
		'themes/clean-ui/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
		'themes/clean-ui/vendors/fullcalendar/dist/fullcalendar.min.js',
		'themes/clean-ui/vendors/bootstrap-sweetalert/dist/sweetalert.min.js',
		'themes/clean-ui/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js',
		'themes/clean-ui/vendors/summernote/dist/summernote.min.js',
		'themes/clean-ui/vendors/owl.carousel/dist/owl.carousel.min.js',
		'themes/clean-ui/vendors/ionrangeslider/js/ion.rangeSlider.min.js',
		'themes/clean-ui/vendors/nestable/jquery.nestable.js',
		'themes/clean-ui/vendors/datatables/media/js/jquery.dataTables.min.js',
		'themes/clean-ui/vendors/datatables/media/js/dataTables.bootstrap4.min.js',
		'themes/clean-ui/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js',
		'themes/clean-ui/vendors/datatables-responsive/js/dataTables.responsive.js',
		'themes/clean-ui/vendors/editable-table/mindmup-editabletable.js',
		'themes/clean-ui/vendors/d3/d3.min.js',
		'themes/clean-ui/vendors/c3/c3.min.js',
	//	'themes/clean-ui/vendors/chartist/dist/chartist.min.js',
		'themes/clean-ui/vendors/peity/jquery.peity.min.js',
	//	'themes/clean-ui/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js',
		'themes/clean-ui/vendors/gsap/src/minified/TweenMax.min.js',
		'themes/clean-ui/vendors/hackertyper/hackertyper.js',
		'themes/clean-ui/vendors/jquery-countTo/jquery.countTo.js',
		'themes/clean-ui/vendors/nprogress/nprogress.js',
		'themes/clean-ui/vendors/jquery-steps/build/jquery.steps.min.js',
		'themes/clean-ui/vendors/bootstrap-select/dist/js/bootstrap-select.min.js',
		'themes/clean-ui/vendors/chart.js/src/Chart.bundle.min.js',
		'themes/clean-ui/vendors/dropify/dist/js/dropify.js',
		'themes/clean-ui/common/js/common.js',
		'themes/clean-ui/common/js/demo.temp.js',
		'https://code.highcharts.com/highcharts.js',
		'https://code.highcharts.com/modules/exporting.js',
		'js/jquery.tabledit.js',
		//'themes/metronic/js/app.min.js',
		'js/custom.js',
		'themes/toaster/toastr.min.js',
		 'js/scroll.js',
		 'js/admin-ajax.js'
    ];
    public $depends = [
		
        'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
        
    ];
}
