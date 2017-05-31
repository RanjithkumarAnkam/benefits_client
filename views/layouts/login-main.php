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
<?php $this->head()?>
</head>
<body class="theme-default body-blue login single-page">
	<?php $this->beginBody()?>
		<?= $content?>
	<?php $this->endBody()?>

</body>
</html>
<?php $this->endPage() ?>