<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

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

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'username'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'password'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'email'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
				</div>
				
			</div>  


			<?php if(YII::app()->user->getLevel()==1): ?>
				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'level_ID'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'level_ID'); ?>
						<?php
						echo $form->radioButtonList($model,'level_ID',
							array('1'=>'Administrator','4'=>'Staff'),
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
				<?php endif; ?>


				<div class="form-group">
					<div class="col-md-12">  
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrasi' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

			</div>
</div><!-- form -->