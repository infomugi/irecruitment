  <?php
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerCoreScript('jquery');
  ?>

  <div class="header-stricky">
  	<div class="container">
  		<div class="row">
       <div class="col-md-12">

        <div class="site-logo">
         <img src="<?php echo $baseUrl;?>/assets/images/home/logo-frontend.png" style="width:160px;" class="img-responsive" alt="logo">
       </div>

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

          array('label'=>'Pengguna <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
           'items'=>array(
            array('label'=>'Kelola Data Akun','url'=>array('/user/admin')),
            array('label'=>'Kelola Data Pelamar','url'=>array('/pelamar/admin')),
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

          array('label'=>'<i class="fa fa-list"></i> Lowongan','url'=>array('/lowongan/terbaru')),
          array('label'=>'<i class="fa fa-file"></i> Dokumen','url'=>array('/pelamar/dokumen'),'visible'=>yii::app()->user->getLevel()==2),                                  
          array('label'=>'<i class="fa fa-file-text"></i> Pengajuan','url'=>array('/filelamaran/history'),'visible'=>yii::app()->user->getLevel()==2),                                  
          array('label'=>'<i class="fa fa-user"></i> Profil','url'=>array('/pelamar/profile'),'visible'=>yii::app()->user->getLevel()==2),
          array('label'=>'<i class="fa fa-edit"></i> Edit Profil','url'=>array('/pelamar/update'),'visible'=>yii::app()->user->getLevel()==2),
          array('label'=>'<i class="fa fa-image"></i> Foto','url'=>array('/user/upload'),'visible'=>yii::app()->user->getLevel()==2),
          array('label'=>'<i class="fa fa-lock"></i> Password','url'=>array('/pelamar/password'),'visible'=>yii::app()->user->getLevel()==2),                                                

          array('label'=>'<i class="fa fa-user"></i> Register Pencaker','url'=>array('/site/pencaker'),'visible'=>yii::app()->user->isGuest),
          array('label'=>'<i class="fa fa-building-o"></i> Register Perusahaan','url'=>array('/site/pencaker'),'visible'=>yii::app()->user->isGuest),
          array('label'=>'<i class="fa fa-lock"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
          array('label'=>'<i class="fa fa-power-off"></i> Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
          ),
          )); ?>


        </div>
      </nav>  
    </div>
  </div>
</div>
</div>


