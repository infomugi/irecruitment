<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */
/* @var $form CActiveForm */
?>
<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

	

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'penilaian-saw-form',
			'enableAjaxValidation'=>false,
			)); ?>
					<div class="form-group alert alert-warning">
						
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-sm-8">
				
							<?php
							echo $form->radioButtonList($model,'status',
								array('1'=>'Disetujui','2'=>'Pending','3'=>'Tidak Disetujui'),
								array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:15px'),

									)                              
								);
								?>
							</div>
							
						</div>  

						<div class="form-group">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Review' : 'Verifikasi', array('class' => 'default-button  btn-primary pull-right')); ?>
						</div>


						<?php $this->endWidget(); ?>

					</div>
				</div>
