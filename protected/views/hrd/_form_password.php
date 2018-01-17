<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($user, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-3 control-label">
					<?php echo $form->labelEx($user,'password'); ?>
				</div>   

				<div class="col-sm-9">
					<?php echo $form->error($user,'password'); ?>
					<?php echo $form->passwordField($user,'password',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				<div class="col-md-12">  
					<?php echo CHtml::submitButton($user->isNewRecord ? 'Registrasi' : 'Edit Password', array('class' => 'btn btn-success btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->