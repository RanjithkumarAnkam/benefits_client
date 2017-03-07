<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\PasswordForm;
use yii\widgets\ActiveForm;
/* @var $this \yii\web\View */
/* @var $content string */
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags()?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>

      
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.png" rel="icon" type="image/png">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- metronic styles -->
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/metronic/css/components.min.css">
    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jscrollpane/style/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/cleanhtmlaudioplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/cleanhtmlvideoplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/datatables/media/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/chartist/dist/chartist.min.css">
    <!-- v1.4.0 -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-steps/demo/css/jquery.steps.css">
    <!-- v1.4.2 -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!-- v1.7.0 -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/dropify/dist/css/dropify.min.css">

    <!-- Clean UI Styles -->
   
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/css/source/main.css">    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/dev-express/css/dx.common.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/dev-express/css/dx.light.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/css/admin.css">
     
  
    
    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/spin.js/spin.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/ladda/dist/ladda.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/summernote/dist/summernote.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/nestable/jquery.nestable.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/d3/d3.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/c3/c3.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/peity/jquery.peity.min.js"></script>
    <!-- v1.0.1 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- v1.1.1 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/gsap/src/minified/TweenMax.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/hackertyper/hackertyper.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-countTo/jquery.countTo.js"></script>
    <!-- v1.4.0 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery-steps/build/jquery.steps.min.js"></script>
    <!-- v1.4.2 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/chart.js/src/Chart.bundle.min.js"></script>
    <!-- v1.7.0 -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/dropify/dist/js/dropify.min.js"></script>

    <!-- Clean UI Scripts -->
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/js/common.js"></script>
    
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/js/demo.temp.js"></script>
  
   <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/metronic/js/app.min.js"></script>
  
    
</head>
<body class="theme-default  colorful-enabled">
    <?php $this->beginBody()?>
 <?=$this->render ( 'left.php' )?>
 <?=$this->render ( 'header.php' )?>
 <?php echo $content;?>
 <?php //echo $this->render ( 'footer.php' )?>

<div class="main-backdrop"><!-- --></div>

 <?php $this->endBody()?>
	


	<!-- jQuery 2.1.4 -->


</body>
</html>