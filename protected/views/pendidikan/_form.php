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
					<?php echo $form->labelEx($model,'tahun_lulus'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tahun_lulus'); ?>
					<?php echo $form->textField($model,'tahun_lulus',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nilai'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nilai'); ?>
					<?php echo $form->textField($model,'nilai',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jurusan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jurusan'); ?>
					<?php echo $form->textField($model,'jurusan',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			

			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-primary btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->