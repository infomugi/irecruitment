<?php
/* @var $this PeopleController */
/* @var $model People */
/* @var $form CActiveForm */
$this->pageTitle='Upload - Lamaran';
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'people-form',
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

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'file_lamaran'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'file_lamaran'); ?>
					<?php echo $form->fileField($model,'file_lamaran',array('class'=>'form-control')); ?>
				</div>

			</div>   	

			
			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Unggah' : 'Upload', array('class' => 'btn btn-primary btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->