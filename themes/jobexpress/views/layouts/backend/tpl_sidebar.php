
<!-- End Top Navigation -->
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
    <div class="user-profile">
      <div class="dropdown user-pro-body">
        <div><img src="<?php echo $frontUrl; ?>/frontend/img/logo-alt.png" alt="logo" class="img-responsive"></div>
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
            <span class="hide-menu">Beranda</span>
          </a>
        </li>
        <?php if(YII::app()->user->getLevel()==1){ ?>
          <li> 
            <a href="#" class="waves-effect"><i class="fa fa-archive"></i> <span class="hide-menu">Laporan<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
              <li><a href="<?php echo $url;?>lowongan/admin">Lowongan</a></li>
              <li><a href="<?php echo $url;?>lowongan/listreport">Lamaran</a></li>
            </ul>
          </li>
          <li> 
            <a href="#" class="waves-effect"><i class="fa fa-users"></i> <span class="hide-menu">Pengguna<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
              <li><a href="<?php echo $url;?>pelamar/admin">Pelamar</a></li>
              <li><a href="<?php echo $url;?>hrd/admin">HRD</a></li>
            </ul>
          </li>
          <li> 
            <a href="#" class="waves-effect"><i class="fa fa-tasks"></i> <span class="hide-menu">Referensi<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
              <li><a href="<?php echo $url;?>bagian/admin">Bagian</a></li>
              <li><a href="<?php echo $url;?>jabatan/admin">Jabatan</a></li>
              <li><a href="<?php echo $url;?>perusahaan/admin">Perusahaan</a></li>
              <li><a href="<?php echo $url;?>user/admin">Pengguna</a></li>
            </ul>
          </li>
          <li> 
            <a href="#" class="waves-effect"><i class="fa fa-cog"></i> <span class="hide-menu">Konfigurasi<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
             <li><a href="<?php echo $url;?>crips/admin">Nilai</a></li>
             <li><a href="<?php echo $url;?>kriteria/admin">Kriteria</a></li>
             <!-- <li><a href="<?php echo $url;?>penilaiansaw/perhitungan">Analisis</a></li> -->
           </ul>
         </li>

         <?php }elseif(YII::app()->user->getLevel()==3){?>

           <li>
            <a href="<?php echo $url;?>perusahaan/edit" class="waves-effect">
              <i class=" fa fa-building" data-icon="v"></i> 
              <span class="hide-menu">Perusahaan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $url;?>lowongan/perusahaan" class="waves-effect">
              <i class=" fa fa-archive" data-icon="v"></i> 
              <span class="hide-menu">Lowongan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $url;?>pelamar/admin" class="waves-effect">
              <i class=" fa fa-users" data-icon="v"></i> 
              <span class="hide-menu">Pencaker</span>
            </a>
          </li>          

          <?php }?>


        </ul>
      </div>
    </div>
      <!-- Left navbar-header end -->