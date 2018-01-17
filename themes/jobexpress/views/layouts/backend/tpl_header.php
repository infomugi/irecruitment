<!DOCTYPE html>
<html lang="en">
<?php
$baseUrl = Yii::app()->theme->baseUrl."/backend"; 
$frontUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl."/"; 
$cs = Yii::app()->getClientScript();
Yii::app()->clientScript->registerCoreScript('jquery');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $baseUrl;?>/plugins/images/favicon.png">
  <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
  <link href="<?php echo $baseUrl;?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseUrl;?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
  <link href="<?php echo $baseUrl;?>/css/animate.css" rel="stylesheet">
  <link href="<?php echo $baseUrl;?>/css/style.css" rel="stylesheet">
  <link href="<?php echo $baseUrl;?>/css/colors/blue.css" id="theme" rel="stylesheet">
  <link href="<?php echo $frontUrl;?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $frontUrl;?>/assets/plugins/themify/themify-icons.css" rel="stylesheet">
</head>

<body class="fix-sidebar fix-header">

  <div id="wrapper">