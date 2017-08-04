<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">


	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'pendidikan-form',
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
				<?php echo $form->labelEx($model,'macam'); ?>
			</div>   

			<div class="col-sm-8">
				<?php echo $form->error($model,'macam'); ?>
				<?php
				echo $form->radioButtonList($model,'macam',
					array('1'=>'Pelatihan','2'=>'Workshop','3'=>'Seminar','4'=>'Lainnya'),
					array(
						'template'=>'{input}{label}',
						'separator'=>'',
						'labelOptions'=>array(
							'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

						)                              
					);
					?>
				</div>

			</div>  


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
					<?php echo $form->labelEx($model,'no_sertifikat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'no_dokumen'); ?>
					<?php echo $form->textField($model,'no_dokumen',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'mulai'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'mulai'); ?>
					<?php
					$this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'mulai',
						'mask' => '99-99-9999',
						'htmlOptions' => array('class'=>'form-control','placeholder'=>'Format: Tanggal - Bulan - Tahun')
						));
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'selesai'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'selesai'); ?>
						<?php
						$this->widget('CMaskedTextField', array(
							'model' => $model,
							'attribute' => 'selesai',
							'mask' => '99-99-9999',
							'htmlOptions' => array('class'=>'form-control','placeholder'=>'Format: Tanggal - Bulan - Tahun')
							));
							?>
						</div>

					</div>  


					<div class="form-group">
						<div class="col-md-12">  
						</br></br>
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div><!-- form -->