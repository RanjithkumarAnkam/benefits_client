<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\LoginAsset;

LoginAsset::register($this);
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Benefits Client - Login</title>


<!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Vendors Styles -->
<!-- v1.0.0 -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/bootstrap/dist/css/bootstrap.min.css">
<!-- Clean UI Styles -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/css/source/main.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/css/site.css">

</head>
<body class="theme-default">
	<?php $this->beginBody()?>
		<?= $content?>
	<?php $this->endBody()?>

</body>
</html>
<?php $this->endPage() ?>