
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
      <ul class="dropdown-menu mailbox">
        <li>
          <div class="message-center">

            <?php foreach (Pelamar::getApplicant() as $data) { ?>
              <a href="<?php echo $url."pelamar/view/id/".$data['id_people']; ?>">
                <div class="user-img"> <img src="<?php echo YII::app()->baseUrl."/lamaran/foto/".$data['image']; ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5><?php echo $data['nama']; ?></h5>
                  <span class="mail-desc">Lihat profil <?php echo $data['nama']; ?></span>  </div>
                </a>
                <?php } ?>

              </div>
            </li>
            <li>
              <a class="text-center" href="<?php echo $url; ?>pelamar/admin"> <strong>Lihat Semua Pelamar</strong> <i class="fa fa-angle-right"></i> </a>
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