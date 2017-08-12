<?php
/* @var $this DokumenController */
/* @var $model Dokumen */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'dokumen-form',
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
							<?php echo $form->labelEx($model,'tanggal'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tanggal'); ?>
							<?php echo $form->textField($model,'tanggal'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'cv'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'cv'); ?>
							<?php echo $form->textField($model,'cv',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'ktp'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'ktp'); ?>
							<?php echo $form->textField($model,'ktp',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'ijazah'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'ijazah'); ?>
							<?php echo $form->textField($model,'ijazah',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'transkrip'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'transkrip'); ?>
							<?php echo $form->textField($model,'transkrip',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'skck'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'skck'); ?>
							<?php echo $form->textField($model,'skck',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'sertifikat'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'sertifikat'); ?>
							<?php echo $form->textField($model,'sertifikat',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'people_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'people_id'); ?>
							<?php echo $form->textField($model,'people_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'user_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'user_id'); ?>
							<?php echo $form->textField($model,'user_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'verifikasi_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'verifikasi_id'); ?>
							<?php echo $form->textField($model,'verifikasi_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'tanggal_verifikasi'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tanggal_verifikasi'); ?>
							<?php echo $form->textField($model,'tanggal_verifikasi'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

							<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->