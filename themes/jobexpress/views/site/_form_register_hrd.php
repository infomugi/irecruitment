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
	<?php echo $form->errorSummary($hrd, null, null, array('class' => 'alert alert-danger text-left')); ?>


	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-credit-card"></i></span>
			<?php $this->widget('CMaskedTextField',array('model'=>$hrd,'attribute'=>'nik','mask'=>'9999999999999999','htmlOptions'=>array('class'=>'form-control', 'placeholder'=>'Nomor Induk KTP')));
			?>
		</div>
	</div>
	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-user"></i></span>
			<?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username HRD')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-mobile"></i></span>
			<?php echo $form->textField($hrd,'hp', array('class' => 'form-control', 'placeholder'=>'No. HP HRD')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-email"></i></span>
			<?php echo $form->textField($model,'email', array('class' => 'form-control', 'placeholder'=>'Email HRD')); ?>
		</div>
	</div>

	<hr class="hr-xs">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="ti-pin"></i></span>
			<?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder'=>'Password')); ?>
		</div>
	</div>

	<?php echo CHtml::submitButton('Daftar',array('class'=>'btn btn-info btn-block')); ?>


	<?php $this->endWidget(); ?>  

