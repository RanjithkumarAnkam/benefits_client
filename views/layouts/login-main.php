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
	content="width=device-width, initial-scale=1, user-scalable=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Self Insured Reporting - Login</title>
   <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/favicon.png" rel="icon" type="image/png">
<?php $this->head()?>
</head>
<body class="theme-default body-blue login single-page">
	<?php $this->beginBody()?>
		<?= $content?>
	<?php $this->endBody()?>

</body>
</html>
<?php $this->endPage() ?>