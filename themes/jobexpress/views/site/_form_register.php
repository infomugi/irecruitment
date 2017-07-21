<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
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

	<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

	<div class="form-group">
		<label> Username</label>
		<?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username')); ?>
		<div class="search_icon"><span class="ti-credit-card"></span></div>
	</div>


	<div class="form-group">
		<label> <?php echo $form->labelEx($Pelamar,'nama'); ?></label>
		<?php echo $form->textField($Pelamar,'nama', array('class' => 'form-control', 'placeholder'=>'Nama Lengkap')); ?>
		<div class="search_icon"><span class="ti-user"></span></div>
	</div>

	<div class="form-group">
		<label> Email</label>
		<?php echo $form->textField($model,'email', array('class' => 'form-control', 'placeholder'=>'Email')); ?>
		<div class="search_icon"><span class="ti-email"></span></div>
	</div>

	<div class="form-group">
		<label> Password</label>
		<?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
		<div class="search_icon"><span class="ti-pin"></span></div>
	</div>

	<div class="mrgn-30-top">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next' : 'Edit', array('class' => 'btn btn-larger btn-block')); ?>
	</div>

	<?php $this->endWidget(); ?>  

