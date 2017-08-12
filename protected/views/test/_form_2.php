<?php
/* @var $this TestController */
/* @var $model Test */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'test-form',
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
					<?php echo $form->labelEx($model,'status2'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status2'); ?>
					<?php
					echo $form->radioButtonList($model,'status2',
						array('Lulus'=>'Lulus','Gagal'=>'Gagal'),
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
						<?php echo $form->labelEx($model,'berita_acara2'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'berita_acara2'); ?>
						<?php echo $form->textArea($model,'berita_acara2',array('class'=>'form-control')); ?>
					</div>
					
				</div>  

				

				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->