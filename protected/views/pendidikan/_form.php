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
				<?php echo $form->labelEx($model,'jenjang'); ?>
			</div>   

			<div class="col-sm-8">
				<?php echo $form->error($model,'jenjang'); ?>
				<?php
				echo $form->radioButtonList($model,'jenjang',
					array('1'=>'SD','2'=>'SMP','3'=>'SMA','4'=>'D-1/D3','5'=>'S-1','6'=>'S-2','7'=>'S-3'),
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
					<?php echo $form->labelEx($model,'kota'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kota'); ?>
					<?php echo $form->textField($model,'kota',array('class'=>'form-control')); ?>
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

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'mulai'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'mulai'); ?>
					<?php echo $form->textField($model,'mulai',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'selesai'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'selesai'); ?>
					<?php echo $form->textField($model,'selesai',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status'); ?>
					<?php
					echo $form->radioButtonList($model,'status',
						array('1'=>'Lulus','2'=>'Tidak Lulus'),
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
						<?php echo $form->labelEx($model,'nilai'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'nilai'); ?>
						<?php echo $form->textField($model,'nilai',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'jenis'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'jenis'); ?>
						<?php
						echo $form->radioButtonList($model,'jenis',
							array('1'=>'Formal','2'=>'Non Formal'),
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
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-success btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div><!-- form -->