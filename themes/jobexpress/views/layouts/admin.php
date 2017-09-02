    <?php require_once('backend/tpl_header.php'); ?>

    <?php require_once('backend/tpl_navigation.php'); ?>
    
    <?php require_once('backend/tpl_sidebar.php'); ?>

    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
            <h4 class="page-title"><?php echo $this->pageTitle; ?></h4>
          </div>
          <div class="col-lg-7 col-sm-7 col-md-8 col-xs-12 visible-lg">
            <a href="<?php echo $url;?>site/logout" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Logout</a>
            <ol class="breadcrumb">
              <li><a href="<?php echo YII::app()->baseUrl; ?>">Dashboard</a></li>
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


 <?php require_once('backend/tpl_footer.php'); ?>
