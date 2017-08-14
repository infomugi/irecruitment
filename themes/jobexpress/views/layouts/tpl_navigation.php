  <?php
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerCoreScript('jquery');
  ?>

  <div class="header-stricky">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-2">
  				<div class="site-logo">
           <img src="<?php echo $baseUrl;?>/assets/images/home/logo.png" style="width:40px;" class="img-responsive" alt="logo">
         </div>
       </div>
       <div class="col-md-10">
        <nav class="navbar navbar-default navbar-right navbar-static-top">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
       </div> 
       <div id="navbar" class="navbar-collapse collapse">

        <?php $this->widget('zii.widgets.CMenu',array(
         'htmlOptions'=>array('class'=>'nav navbar-nav scrollto'),
         'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
         'itemCssClass'=>'dropdown',
         'encodeLabel'=>false,
         'items'=>array(
          array('label'=>'Home', 'url'=>array('/site/index'),'visible'=>YII::app()->user->getLevel()!=2),
  								// array('label'=>'Profil', 'url'=>array('/site/about'),'visible'=>YII::app()->user->isGuest),
  								// array('label'=>'Visi & Misi', 'url'=>array('/site/visimisi'),'visible'=>YII::app()->user->isGuest),
  								// array('label'=>'Lowongan Kerja', 'url'=>array('/lowongan/index'),'visible'=>YII::app()->user->isGuest),
          array('label'=>'Register','url'=>array('/site/register'),'visible'=>yii::app()->user->isGuest),

          array('label'=>'Data Diri','url'=>array('/pelamar/profile'),'visible'=>yii::app()->user->getLevel()==2),
          array('label'=>'Pengajuan Lamaran','url'=>array('/lowongan/terbaru'),'visible'=>yii::app()->user->getLevel()==2),
          array('label'=>'Pengumuman','url'=>array('/filelamaran/history'),'visible'=>yii::app()->user->getLevel()==2),

          array('label'=>'Pengguna <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
           'items'=>array(
            array('label'=>'Kelola Data Akun','url'=>array('/user/admin')),
            array('label'=>'Kelola Data Pelamar','url'=>array('/pelamar/admin')),
                      // array('label'=>'Pelamar Diterima','url'=>array('/pelamar/index')),
                      // array('label'=>'Pelamar Ditolak','url'=>array('/pelamar/index')),
            ),'visible'=>Yii::app()->user->getLevel()==1), 

          array('label'=>'Job Order <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
           'items'=>array(
            array('label'=>'Tambah Job Order','url'=>array('/lowongan/create')),
            array('label'=>'Kelola Job Order','url'=>array('/lowongan/admin')),
            ),'visible'=>Yii::app()->user->getLevel()==1),

          array('label'=>'Master <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
           'items'=>array(
            array('label'=>'Bagian','url'=>array('/bagian/admin')),
            array('label'=>'Jabatan','url'=>array('/jabatan/admin')),
            array('label'=>'Level','url'=>array('/level/admin')),
            array('label'=>'Provinsi','url'=>array('/provinsi/admin')),
            array('label'=>'Kota','url'=>array('/kota/admin')),
            ),'visible'=>Yii::app()->user->getLevel()==1),                                      

                  // array('label'=>'Pengajuan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                  //   'items'=>array(
                  //     array('label'=>'Tenaga Kerja','url'=>array('/pengajuan/admin')),
                  //     array('label'=>'Pengajuan Karyawan','url'=>array('/pengajuan/pengajuan','id'=>Yii::app()->user->id),'visible'=>yii::app()->user->getLevel()==1),
                  //     ),'visible'=>Yii::app()->user->getLevel()==1),

                  // array('label'=>'Pengumuman <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                  //   'items'=>array(
                  //     array('label'=>'Pengumuman Test Ke-1','url'=>array('/pelamar/PengumumanTest1')),
                  //     array('label'=>'Pengumuman Test Ke-2','url'=>array('/pelamar/PengumumanTest2')),
                  //     array('label'=>'Pengumuman Test Ke-3','url'=>array('/pelamar/PengumumanTest3')),
                  //     ),'visible'=>Yii::app()->user->getLevel()==1),

                  // array('label'=>'Laporan <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                  //   'items'=>array(
                  //     array('label'=>'Laporan Test Ke-1','url'=>array('/pelamar/LaporanTest1')),
                  //     array('label'=>'Laporan Test Ke-2','url'=>array('/pelamar/LaporanTest2')),
                  //     array('label'=>'Laporan Test Ke-3','url'=>array('/pelamar/LaporanTest3')),
                  //     ),'visible'=>Yii::app()->user->getLevel()==1),

                  // array('label'=>'Help <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                  //   'items'=>array(
                  //     array('label'=>'Manual Book Admin','url'=>array('/docx/help' )),
                  //     array('label'=>'Manual Book User','url'=>array('/user/admin')), 
                  //     ),'visible'=>Yii::app()->user->getLevel()==1),

          array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
          array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
          ),
          )); ?>


        </div>
      </nav>  
    </div>
  </div>
</div>
</div>


