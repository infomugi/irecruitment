<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mugi Rachmat">
	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$url = Yii::app()->baseUrl."/index.php?r="; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<link rel="shortcut icon" href="<?php echo $baseUrl;?>/admin/images/avatar.png">
	<link rel="stylesheet" href="<?php echo $baseUrl;?>/admin/plugins/morris/morris.css">
	<link href="<?php echo $baseUrl;?>/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/admin/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/admin/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="fixed-left">

	<!-- Loader -->
	<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- ========== Left Sidebar Start ========== -->
		<div class="left side-menu">
			<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
				<i class="fa fa-chevron-left"></i>
			</button>

			<!-- LOGO -->
			<div class="topbar-left">
				<div class="text-center">
					<!--<a href="#" class="logo">Admiry</a>-->
					<a href="#" class="logo"><img src="<?php echo $baseUrl;?>/assets/images/home/logo.png" height="80" alt="logo"></a>
				</div>
			</div>

			<div class="sidebar-inner slimscrollleft">

				<div class="user-details">
					<div class="text-center">
						<img src="<?php echo $baseUrl;?>/admin/images/avatar.png" alt="" class="rounded-circle">
					</div>
					<div class="user-info">
						<h4 class="font-16">Hi, <?php echo YII::app()->user->name; ?></h4>
						<span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
					</div>
				</div>

				<div id="sidebar-menu">
					<ul>
						<li>
							<a href="<?php echo $url;?>site/index" class="waves-effect">
								<i class="fa fa-dashboard"></i>	<span> Dashboard </span>
							</a>
						</li>
						<li>
							<a href="<?php echo $url;?>lowongan/list" class="waves-effect"><i class="fa fa-archive"></i><span> Job Order </span></a>
						</li>
						<li>
							<a href="<?php echo $url;?>filelamaran/index" class="waves-effect"><i class="fa fa-file"></i><span> Data Lamaran </span></a>
						</li>
						<li>
							<a href="<?php echo $url;?>lowongan/listreport" class="waves-effect"><i class="fa fa-file-text"></i><span> Laporan </span></a>
						</li>

						<li>
							<a href="<?php echo $url;?>user/admin" class="waves-effect"><i class="fa fa-github-alt"></i><span> Account Setting </span></a>
						</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog"></i><span> Metode SAW </span></a>
							<ul class="list-unstyled">
								<li><a href="<?php echo $url;?>crips/admin">Nilai Crips</a></li>
								<li><a href="<?php echo $url;?>kriteria/admin">Kriteria</a></li>
								<li><a href="<?php echo $url;?>penilaiansaw/perhitungan">Analisis</a></li>
							</ul>
						</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tasks"></i><span> Referensi </span></a>
							<ul class="list-unstyled">
								<li><a href="<?php echo $url;?>bagian/admin">Bagian</a></li>
								<li><a href="<?php echo $url;?>jabatan/admin">Jabatan</a></li>
							</ul>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- end sidebarinner -->
		</div>
		<!-- Left Sidebar End -->

		<!-- Start right Content here -->

		<div class="content-page">
			<!-- Start content -->
			<div class="content">

				<!-- Top Bar Start -->
				<div class="topbar">

					<nav class="navbar-custom">

						<ul class="list-inline float-right mb-0">
							<li class="list-inline-item dropdown notification-list">
								<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
								aria-haspopup="false" aria-expanded="false">
								<i class="fa fa-bell noti-icon"></i>
								<span class="badge badge-success noti-icon-badge">3</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h5><span class="badge badge-danger float-right">87</span>Notification</h5>
								</div>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-primary"><i class="fa fa-cart-outline"></i></div>
									<p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
								</a>

								<!-- item-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									<div class="notify-icon bg-primary"><i class="fa fa-message"></i></div>
									<p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
								</a>

								<!-- All-->
								<a href="javascript:void(0);" class="dropdown-item notify-item">
									View All
								</a>

							</div>
						</li>

						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
							aria-haspopup="false" aria-expanded="false">
							<img src="<?php echo $baseUrl;?>/admin/images/avatar.png" alt="user" class="rounded-circle">
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
							<a class="dropdown-item" href="<?php echo $url;?>/user/view&id=<?php echo YII::app()->user->id; ?>"><i class="fa fa-user m-r-5 text-muted"></i> Lihat Profile</a>
							<a class="dropdown-item" href="<?php echo $url;?>/user/update&id=<?php echo YII::app()->user->id; ?>"><i class="fa fa-cog m-r-5 text-muted"></i> Edit Profil</a>
							<a class="dropdown-item" href="<?php echo $url;?>/site/logout"><i class="fa fa-power-off m-r-5 text-muted"></i> Logout</a>
						</div>
					</li>

				</ul>

				<ul class="list-inline menu-left mb-0">
					<li class="list-inline-item">
						<button type="button" class="button-menu-mobile open-left waves-effect">
							<i class="fa fa-list"></i>
						</button>
					</li>
					<li class="hide-phone list-inline-item app-search">
						<h3 class="page-title"><?php echo CHtml::encode($this->pageTitle); ?></h3>
					</li>
				</ul>

				<div class="clearfix"></div>

			</nav>

		</div>
		<!-- Top Bar End -->

		<div class="page-content-wrapper ">

			<div class="container">

				<?php echo $content; ?>

			</div><!-- container -->


		</div> <!-- Page content Wrapper -->

	</div> <!-- content -->


</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->




<script src="<?php echo $baseUrl;?>/admin/js/tether.min.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/modernizr.min.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/detect.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/fastclick.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/jquery.blockUI.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/waves.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo $baseUrl;?>/admin/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo $baseUrl;?>/admin/pages/dashborad.js"></script>

<!-- App js -->
<script src="<?php echo $baseUrl;?>/admin/js/app.js"></script>

</body>
</html>
