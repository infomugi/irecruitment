<?php
/* @var $this OrganisasiController */
/* @var $model Organisasi */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-11"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'organisasi-form',
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
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tempat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tempat'); ?>
					<?php echo $form->textField($model,'tempat',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jenis_kegiatan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jenis_kegiatan'); ?>
					<?php
					echo $form->radioButtonList($model,'jenis_kegiatan',
						array('1'=>'Kemasyarakatan','2'=>'Pendidikan','3'=>'Pemerintahan'),
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
						<?php echo $form->labelEx($model,'tahun'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'tahun'); ?>
						<?php echo $form->textField($model,'tahun',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'jabatan'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'jabatan'); ?>
						<?php echo $form->textField($model,'jabatan',array('class'=>'form-control')); ?>
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