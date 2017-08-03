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

	<main id="maincontent">
		<div class="container">
			<div class="about_us">
				<div class="row">

					

					<div class="col-md-3">

						<div class="job_title">Categories</div>
						<div class="borderfull-width"></div>
						<div class="clearfix"></div>
						<div class="page-heading">
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Accounting" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Accounting">Accounting Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Interior" name="ossm" checked=""> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Interior">Interior Design Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Bank" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Bank">Bank Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Content" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Content">Content Writing Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Consultant" name="ossm" checked=""> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Consultant">Consultant Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="jobs" name="ossm" checked=""> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="jobs">Engineering Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="export" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="export">Export Import Jobs</label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Merchandiser" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Merchandiser">Merchandiser Jobs </label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="Security" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="Security">Security  Jobs </label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="hr" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="hr">HR Jobs </label> 
								</div>
							</div>
							<div class="category">
								<div class="col-md-1 p-l p-r">
									<input type="checkbox" id="hotel" name="ossm"> 
								</div>
								<div class="col-md-11 p-l p-r">
									<label for="hotel">Hotel Jobs </label> 
								</div>
							</div>
						</div>
						
					</div>

					<div class="col-md-9">
						<?php echo $content; ?>
					</div>

				</div>
			</div>
		</div>
	</main>

	<script src="<?php echo $baseUrl;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/common.js"></script>

</body>
</html>
