<?php
/* @var $this CripsController */
/* @var $model Crips */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'crips-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kriteria_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kriteria_id'); ?>
					<?php echo $form->dropDownList($model, "kriteria_id",
						CHtml::listData(Kriteria::model()->findAll(),
							'id_kriteria', 'nama'
							),

						array("empty"=>"-- Pilih Kriteria --", 'class'=>'form-control')
						); ?> 
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'keterangan'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'keterangan'); ?>
						<?php echo $form->textField($model,'keterangan',array('class'=>'form-control md-input')); ?>
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'nilai'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'nilai'); ?>
						<?php echo $form->textField($model,'nilai',array('class'=>'form-control md-input')); ?>
					</div>
					
				</div>  

				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'default-button pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->