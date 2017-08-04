<?php
/* @var $this BahasaController */
/* @var $model Bahasa */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bahasa-form',
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
					<?php echo $form->labelEx($model,'berbicara'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'berbicara'); ?>
					<?php
					echo $form->radioButtonList($model,'berbicara',
						array('1'=>'Sangat Kurang','2'=>'Kurang','3'=>'Baik','4'=>'Sangat Baik'),
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
						<?php echo $form->labelEx($model,'menulis'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'menulis'); ?>
						<?php
						echo $form->radioButtonList($model,'menulis',
							array('1'=>'Sangat Kurang','2'=>'Kurang','3'=>'Baik','4'=>'Sangat Baik'),
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
							<?php echo $form->labelEx($model,'membaca'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'membaca'); ?>
							<?php
							echo $form->radioButtonList($model,'membaca',
								array('1'=>'Sangat Kurang','2'=>'Kurang','3'=>'Baik','4'=>'Sangat Baik'),
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
								<?php echo $form->labelEx($model,'mengerti'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'mengerti'); ?>
								<?php
								echo $form->radioButtonList($model,'mengerti',
									array('1'=>'Sangat Kurang','2'=>'Kurang','3'=>'Baik','4'=>'Sangat Baik'),
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
								<div class="col-md-12">  
								</br></br>
								<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
							</div>
						</div>

						<?php $this->endWidget(); ?>

</div></div><!-- form -->