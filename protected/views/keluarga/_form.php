<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'keluarga-form',
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
				<?php echo $form->labelEx($model,'hubungan_keluarga'); ?>
			</div>   

			<div class="col-sm-8">
				<?php echo $form->error($model,'hubungan_keluarga'); ?>
				<?php
				echo $form->radioButtonList($model,'hubungan_keluarga',
					array('1'=>'Ayah','2'=>'Ibu','3'=>'Anak','4'=>'Istri','5'=>'Suami'),
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
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jenis_kelamin'); ?>
					<?php
					echo $form->radioButtonList($model,'jenis_kelamin',
						array('1'=>'Laki-laki','0'=>'Perempuan'),
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
						<?php echo $form->labelEx($model,'tempat_lahir'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'tempat_lahir'); ?>
						<?php echo $form->textField($model,'tempat_lahir',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'tanggal_lahir'); ?>
						<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'options'=>array(
								'showAnim'=>'fold',
								),
							'model'=>$model,
							'attribute'=>'tanggal_lahir',
							'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tanggal_lahir)),
							'htmlOptions'=>array(
								'class'=>'form-control',
								'tabindex'=>2
								),
							'options'=>array(
								'dateFormat' => 'd-mm-yy',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
							));
							?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'pendidikan_terakhir'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'pendidikan_terakhir'); ?>
							<?php
							echo $form->radioButtonList($model,'pendidikan_terakhir',
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
								<?php echo $form->labelEx($model,'jabatan_pekerjaan'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'jabatan_pekerjaan'); ?>
								<?php echo $form->dropDownList($model, "jabatan_pekerjaan",
									CHtml::listData(Jabatan::model()->findAll(array('condition'=>'status = "Aktif"','order'=>'nama ASC')),
										'id_jabatan', 'nama'
										),
									array("empty"=>"-- Pilih Jabatan --", 'class'=>'form-control')
									); ?> 
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'nama_perusahaan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'nama_perusahaan'); ?>
									<?php echo $form->textField($model,'nama_perusahaan',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'keterangan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'keterangan'); ?>
									<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">
								<div class="col-md-12">  
								</br></br>
								<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
							</div>
						</div>

						<?php $this->endWidget(); ?>


					</div>
<!-- form -->