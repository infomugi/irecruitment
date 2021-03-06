<!DOCTYPE html>
<?php
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>

    <!-- Styles -->
    <link href="<?php echo $baseUrl;?>/frontend/css/app.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/custom.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/themify-icons.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="icon" href="<?php echo $baseUrl;?>/frontend/img/favicon.ico">
</head>

<body class="login-page">

    <?php echo $content; ?>


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <?php
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>
</body>
</html>
