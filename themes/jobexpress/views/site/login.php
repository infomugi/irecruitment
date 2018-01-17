<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle='Login';
$this->breadcrumbs=array(
	'Login',
  );
  ?>
  <main>

    <div class="login-block">
     <img src="<?php echo YII::app()->theme->baseUrl;?>/frontend/img/logo-alt.png" alt="logo-alt">
     <h1>Masuk</h1>

     <?php
     foreach(Yii::app()->user->getFlashes() as $key => $message) {
      echo '</BR><div class="alert alert-' . $key . '">' . $message . "</div>\n";
    }
    ?>

    <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'enableAjaxValidation'=>false,
      'enableClientValidation' => true,
      'clientOptions' => array(
        'validateOnSubmit' => true,
        ),
      'errorMessageCssClass' => 'label label-info',
      'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
      )); ?>

      <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger text-left')); ?>

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="ti-email"></i></span>
          <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username atau Email')); ?>
        </div>
      </div>

      <hr class="hr-xs">

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="ti-unlock"></i></span>
          <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
        </div>
      </div>

      <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary btn-block')); ?>



      <?php $this->endWidget(); ?>  
    </div>

    <div class="login-links">
      <a class="pull-left" href="<?php echo YII::app()->baseUrl; ?>/site/index"><span class="hidden-xs">Kembali ke</span> Home</a>
      <a class="pull-right" href="<?php echo YII::app()->baseUrl; ?>/site/pencaker"><span class="hidden-xs">Belum Punya Akun ?</span> Daftar Disini</a>
    </div>

  </main>
