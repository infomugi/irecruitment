
<!-- End Top Navigation -->
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
    <div class="user-profile">
      <div class="dropdown user-pro-body">
        <div><img src="<?php echo $frontUrl; ?>/assets/images/home/logo.png" alt="logo" class="img-responsive"></div>
        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile Saya<span class="caret"></span></a>
        <ul class="dropdown-menu animated flipInY">
          <li><a href="<?php echo $url;?>user/viewstaff"><i class="ti-user"></i> Lihat Profil</a></li>
          <li><a href="<?php echo $url;?>user/editstaff"><i class="ti-settings"></i> Edit Profile</a></li>
          <li><a href="<?php echo $url;?>user/editstaffpassword"><i class="ti-lock"></i> Edit Password</a></li>
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
        <?php if(YII::app()->user->getLevel()==1){ ?>
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
            <li><a href="<?php echo $url;?>perusahaan/admin">Perusahaan</a></li>
          </ul>
        </li>

        <?php }elseif(YII::app()->user->getLevel()==5){?>

          <li>
            <a href="<?php echo $url;?>lowongan/admin" class="waves-effect">
              <i class=" fa fa-archive" data-icon="v"></i> 
              <span class="hide-menu">Job Order</span>
            </a>
          </li>

          <?php }?>


        </ul>
      </div>
    </div>
      <!-- Left navbar-header end -->