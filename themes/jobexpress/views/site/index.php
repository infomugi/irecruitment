<?php
$this->pageTitle='Beranda';
?>

<!-- Navigation bar -->
<nav class="navbar">
  <div class="container">

    <!-- Logo -->
    <div class="pull-left">
      <a class="navbar-toggle" href="#" data-toggle="offcanvas"></i></a>

      <div class="logo-wrapper">
        <a class="logo" href="#"><img src="<?php echo YII::app()->theme->baseUrl;?>/frontend/img/logo.png" alt="logo"></a>
        <a class="logo-alt" href="#"><img src="<?php echo YII::app()->theme->baseUrl;?>/frontend/img/logo-alt.png" alt="logo-alt"></a>
      </div>

    </div>
    <!-- END Logo -->

    <!-- User account -->
    <div class="pull-right user-login">
      <a class="btn btn-sm btn-primary" href="<?php echo YII::app()->baseUrl; ?>/site/login">Login</a> <a class="btn btn-sm btn-success" href="<?php echo YII::app()->baseUrl; ?>/site/pencaker">Pencaker</a> 
      <a class="btn btn-sm btn-success" href="<?php echo YII::app()->baseUrl; ?>/site/perusahaan">Perusahaan</a> 
    </div>
    <!-- END User account -->

  </div>
</nav>
<!-- END Navigation bar -->


<!-- Site header -->
<header class="site-header size-lg text-center" style="background-image: url(<?php echo YII::app()->theme->baseUrl;?>/frontend/img/blog-2.jpg)">
  <div class="container">
    <div class="col-xs-12">
      <br><br>
      <h2>Saat ini <mark>2000+</mark> Perusahaan Terdaftar</h2>
      <h5 class="font-alt">Sistem Rekrutmen Online Dinas Tenaga Kerja Kab. Bandung</h5>
      <br><br><br>
      <form class="header-job-search">
        <div class="input-keyword">

         <?php 
         echo CHtml::beginForm(CHtml::normalizeUrl(array('company/index')), 'get', array('id'=>'filter-form'))
         . CHtml::textField('find', (isset($_GET['find'])) ? $_GET['find'] : '', array('id'=>'find','class'=>'form-control','placeholder'=>'Cari Lowongan Kerja...'))
         . CHtml::endForm();
         ?>

       </div>
     </form>
   </div>

 </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>


  <!-- Recent jobs -->
  <section>
    <div class="container">
      <header class="section-header">
        <span>Terbaru</span>
        <h2>Lowongan Kerja</h2>
      </header>

      <div class="row item-blocks-connected">

       <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view_lowongan',
        'summaryText'=>'',
        )); ?>

      </div>

      <br><br>
      <p class="text-center"><a class="btn btn-info" href="<?php echo YII::app()->baseUrl; ?>/site/login">Login untuk Melamar</a></p>

    </div>
  </section>
  <!-- END Recent jobs -->






</main>
<!-- END Main container -->

