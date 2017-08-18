
<!DOCTYPE html>
<html lang="en">
<?php
$baseUrl = Yii::app()->theme->baseUrl."/backend"; 
$frontUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl."/index.php?r="; 
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
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo $baseUrl;?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Menu CSS -->
  <link href="<?php echo $baseUrl;?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
  <!-- animation CSS -->
  <link href="<?php echo $baseUrl;?>/css/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo $baseUrl;?>/css/style.css" rel="stylesheet">
  <!-- color CSS -->
  <link href="<?php echo $baseUrl;?>/css/colors/default.css" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo $frontUrl;?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $frontUrl;?>/assets/plugins/themify/themify-icons.css" rel="stylesheet">
  </head>

  <body class="fix-sidebar fix-header">

    <div id="wrapper">
      <!-- Top Navigation -->
      <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
          <div class="top-left-part">

            <a class="logo" href="#"><b>
              <!--This is light logo icon-->
              <!--  <img src="<?php echo $frontUrl; ?>/assets/images/home/logo-frontend.png" alt="home" class="light-logo" /></b> -->

            </a>

          </div>

          <ul class="nav navbar-top-links navbar-right pull-right">

            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="blank.html#" aria-expanded="false"><i class="fa fa-bell"></i>
              <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu mailbox animated bounceInDown">
              <li>
                <div class="drop-title">You have 4 new messages</div>
              </li>
              <li>
                <div class="message-center">
                  <a href="blank.html#">
                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                      <h5>Pavan kumar</h5>
                      <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                    </a>
                    <a href="blank.html#">
                      <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                      <div class="mail-contnet">
                        <h5>Sonu Nigam</h5>
                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                      </a>
                      <a href="blank.html#">
                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                        <div class="mail-contnet">
                          <h5>Arijit Sinh</h5>
                          <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                        </a>
                        <a href="blank.html#">
                          <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                          <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                      </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                  </li>


                  <li class="dropdown"> 
                    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                      <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.navbar-header -->
              <!-- /.navbar-top-links -->
              <!-- /.navbar-static-side -->
            </nav>
            <!-- End Top Navigation -->
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                  <div class="dropdown user-pro-body">
                    <div><img src="<?php echo $frontUrl; ?>/assets/images/home/logo.png" alt="logo" class="img-responsive"></div>
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@<?php echo YII::app()->user->name; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                      <li><a href="<?php echo $url;?>user/profile"><i class="ti-user"></i> My Profile</a></li>
                      <li><a href="<?php echo $url;?>user/edit"><i class="ti-settings"></i> Account Setting</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="<?php echo $url;?>site/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                  </div>
                </div>
                <ul class="nav" id="side-menu">
                  <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                      </span> </div>
                      <!-- /input-group -->
                    </li>
                    <li>
                      <a href="<?php echo $url;?>site/index" class="waves-effect">
                        <i class=" fa fa-dashboard" data-icon="v"></i> 
                        <span class="hide-menu">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo $url;?>lowongan/admin" class="waves-effect">
                        <i class=" fa fa-archive" data-icon="v"></i> 
                        <span class="hide-menu">Job Order</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo $url;?>lowongan/listreport" class="waves-effect">
                        <i class=" fa fa-print" data-icon="v"></i> 
                        <span class="hide-menu">Laporan</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo $url;?>user/admin" class="waves-effect">
                        <i class=" fa fa-users" data-icon="v"></i> 
                        <span class="hide-menu">Account Setting</span>
                      </a>
                    </li>
                    <li> 
                      <a href="#" class="waves-effect"><i class="fa fa-cog"></i> <span class="hide-menu">Metode SAW<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level collapse" aria-expanded="false">
                       <li><a href="<?php echo $url;?>crips/admin">Nilai Crips</a></li>
                       <li><a href="<?php echo $url;?>kriteria/admin">Kriteria</a></li>
                       <!-- <li><a href="<?php echo $url;?>penilaiansaw/perhitungan">Analisis</a></li> -->
                     </ul>
                   </li>
                   <li> 
                    <a href="#" class="waves-effect"><i class="fa fa-tasks"></i> <span class="hide-menu">Master<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false">
                      <li><a href="<?php echo $url;?>bagian/admin">Bagian</a></li>
                      <li><a href="<?php echo $url;?>jabatan/admin">Jabatan</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
              <div class="container-fluid">
                <div class="row bg-title">
                  <div class="col-lg-4 col-md-5 col-sm-4 col-xs-12">
                    <h4 class="page-title"><?php echo $this->pageTitle; ?></h4>
                  </div>
                  <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Logout</a>
                    <ol class="breadcrumb">
                      <li><a href="#">Dashboard</a></li>
                      <li class="active"><?php echo $this->pageTitle; ?></li>
                    </ol>
                  </div>
                  <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                  <div class="col-md-12">
                   <?php echo $content; ?>
                 </div>
               </div>

             </div>
           </div>
           <!-- /#page-wrapper -->
         </div>
         <!-- /#wrapper -->


         <script src="<?php echo $baseUrl;?>/bootstrap/dist/js/bootstrap.min.js"></script>
         <script src="<?php echo $baseUrl;?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
         <script src="<?php echo $baseUrl;?>/js/jquery.slimscroll.js"></script>
         <script src="<?php echo $baseUrl;?>/js/waves.js"></script>
         <script src="<?php echo $baseUrl;?>/js/custom.min.js"></script>
         <script src="<?php echo $baseUrl;?>/plugins/bower_components/peity/jquery.peity.min.js"></script>
         <script src="<?php echo $baseUrl;?>/plugins/bower_components/peity/jquery.peity.init.js"></script>
         <script src="<?php echo $baseUrl;?>/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

       </body>
       </html>