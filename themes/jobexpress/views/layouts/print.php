<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mugi Rachmat">

	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>

	<link href="<?php echo $baseUrl;?>/assets/css/custom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet' type='text/css'>


</head>

<body class="theme-style-1">
<div style="width:1200px;padding:10px">
<div style="font-weight:700;font-size:22px;text-align:center;">PT. Sinar Agung Prasadikindo</div>
<?php echo $content; ?>
</div>

</body>
</html>
