<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
	);

$this->pageTitle=Yii::app()->name . ' - Registrasi';
?>


<main>

	<div class="login-block">
		<img src="<?php echo YII::app()->theme->baseUrl;?>/frontend/img/logo-alt.png" alt="logo-alt">
		<h1>Registrasi Perusahaan</h1>

		<?php echo $this->renderPartial('_form_register_hrd', array('model'=>$model,'hrd'=>$hrd)); ?>

	</div>

	<div class="login-links">
		<a class="pull-left" href="<?php echo YII::app()->baseUrl; ?>/site/index"><span class="hidden-xs">Kembali ke</span> Home</a>
		<a class="pull-right" href="<?php echo YII::app()->baseUrl; ?>/site/login"><span class="hidden-xs">Sudah Punya Akun ?</span> Login Disini</a>
	</div>

</main>
