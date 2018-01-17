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

	<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger text-left')); ?>
	<?php echo $form->errorSummary($Pelamar, null, null, array('class' => 'alert alert-danger text-left')); ?>


	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-credit-card"></i></span>
			<?php 
			// $this->widget('CMaskedTextField',array('model'=>$Pelamar,'attribute'=>'nik','mask'=>'9999999999999999','htmlOptions'=>array('class'=>'form-control', 'placeholder'=>'Nomor Induk KTP')));
			?>
			<?php echo $form->textField($Pelamar,'nik', array('class' => 'form-control', 'placeholder'=>'Nomor Induk KTP')); ?>
		</div>
	</div>
	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-credit-card"></i></span>
			<?php
			// $this->widget('CMaskedTextField',array('model'=>$Pelamar,'attribute'=>'no_kk','mask'=>'9999999999999999','htmlOptions'=>array('class'=>'form-control', 'placeholder'=>'Nomor Kartu Kuning')));
			?>
			<?php echo $form->textField($Pelamar,'no_kk', array('class' => 'form-control', 'placeholder'=>'Nomor Kartu Kuning')); ?>
		</div>
	</div>
	<hr class="hr-xs">	
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-user"></i></span>
			<?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-mobile"></i></span>
			<?php echo $form->textField($Pelamar,'hp', array('class' => 'form-control', 'placeholder'=>'No. HP')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-email"></i></span>
			<?php echo $form->textField($model,'email', array('class' => 'form-control', 'placeholder'=>'Email')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-pin"></i></span>
			<?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder'=>'Password')); ?>
		</div>
	</div>

	<?php echo CHtml::submitButton('Daftar',array('class'=>'btn btn-success btn-block')); ?>


	<?php $this->endWidget(); ?>  

