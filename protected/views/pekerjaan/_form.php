<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'pendidikan-form',
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
					<?php echo $form->labelEx($model,'instansi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'instansi'); ?>
					<?php echo $form->textField($model,'instansi',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tahun'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tahun'); ?>
					<?php echo $form->textField($model,'tahun',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'gaji'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'gaji'); ?>
					<?php echo $form->textField($model,'gaji',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bagian'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bagian'); ?>
					<?php echo $form->textField($model,'bagian',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			

			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->