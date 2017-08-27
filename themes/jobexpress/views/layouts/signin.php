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
    <link href="<?php echo $baseUrl;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/assets/plugins/themify/themify-icons.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>

    <?php require_once('tpl_navigation.php'); ?>

    <div class="page_banner about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading"><?php echo CHtml::encode($this->pageTitle); ?></div>    
                </div>  
            </div>
        </div>
    </div>

    <?php echo $content; ?>

    <script src="<?php echo $baseUrl;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseUrl;?>/assets/js/common.js"></script>

</body>
</html>
