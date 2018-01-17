<?php
/* @var $this LowonganController */
/* @var $model Lowongan */
/* @var $form CActiveForm */
?>
<div class="form-normal form-horizontal clearfix">
	<div class="col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'lowongan-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


			<div class="form-group row">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bagian'); ?>
				</div>   

				<div class="col-md-8">
					<?php echo $form->error($model,'bagian'); ?>
					<?php echo $form->dropDownList($model, "bagian",
						CHtml::listData(Bagian::model()->findAll(array('condition'=>'status = 1','order'=>'nama ASC')),
							'id_bagian', 'nama'
							),
						array(
							'prompt'=>'-- Pilih Bagian --.',
							'class'=>'form-control',
							'ajax' => array(
								'type'=>'POST', 
								'url'=>Yii::app()->createUrl('lowongan/data'), 
								'update'=>'#Lowongan_jabatan', 
								'data'=>array('bagian_id'=>'js:this.value'),
								))
						); 

						?> 
					</div>

				</div>  


				<div class="form-group row">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'jabatan'); ?>
					</div>   

					<div class="col-md-8">
						<?php echo $form->error($model,'jabatan'); ?>
						<?php echo $form->dropDownList($model, "jabatan",
							array(),
							array("empty"=>"-- Pilih Jabatan --", 'class'=>'form-control')
							); ?> 
						<?php 
						// echo $form->dropDownList($model, "jabatan",
						// 	CHtml::listData(Jabatan::model()->findAll(array('condition'=>'status = 1','order'=>'nama ASC')),
						// 		'id_jabatan', 'nama'
						// 		),
						// 	array("empty"=>"-- Pilih Jabatan --", 'class'=>'form-control')
						// ); 
						?> 
					</div>

				</div>  

				<div class="form-group row">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'jumlah_orang'); ?>
					</div>   

					<div class="col-md-8">
						<?php echo $form->error($model,'jumlah_orang'); ?>
						<?php echo $form->textField($model,'jumlah_orang',array('class'=>'form-control')); ?>
					</div>

				</div>  					


				<div class="form-group row">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'tipe'); ?>
					</div>   

					<div class="col-md-8">
						<?php echo $form->error($model,'tipe'); ?>
						<?php
						echo $form->radioButtonList($model,'tipe',
							array('1'=>'Tetap','2'=>'Kontrak'),
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

					<div class="form-group row">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'jeniskelamin'); ?>
						</div>   

						<div class="col-md-8">
							<?php echo $form->error($model,'jeniskelamin'); ?>
							<?php
							echo $form->radioButtonList($model,'jeniskelamin',
								array('L'=>'Laki-Laki','P'=>'Perempuan','LP'=>'L/P'),
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


						<div class="form-group row">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'umur'); ?>
							</div>   

							<div class="col-md-8">
								<?php echo $form->error($model,'umur'); ?>
								<?php echo $form->textField($model,'umur',array('class'=>'form-control')); ?>
							</div>

						</div>  										


						<div class="form-group row">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'deskripsi_pekerjaan'); ?>
							</div>   

							<div class="col-md-8">
								<?php echo $form->error($model,'deskripsi_pekerjaan'); ?>
								<?php echo $form->textArea($model,'deskripsi_pekerjaan',array('class'=>'form-control')); ?>
							</div>

						</div>  


						<div class="form-group row">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'deskripsi_kebutuhan'); ?>
							</div>   

							<div class="col-md-8">
								<?php echo $form->error($model,'deskripsi_kebutuhan'); ?>
								<?php echo $form->textArea($model,'deskripsi_kebutuhan',array('class'=>'form-control')); ?>
							</div>

						</div>  


						<div class="form-group row">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'tanggal_kebutuhan'); ?>
							</div>   

							<div class="col-md-8">
								<?php echo $form->error($model,'tanggal_kebutuhan'); ?>
								<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
									'options'=>array(
										'showAnim'=>'fold',
										),
									'model'=>$model,
									'attribute'=>'tanggal_kebutuhan',
									'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tanggal_kebutuhan)),
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


							<div class="form-group row">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'lokasi'); ?>
								</div>   

								<div class="col-md-8">
									<?php echo $form->error($model,'lokasi'); ?>
									<?php echo $form->textField($model,'lokasi',array('id'=>'advanced-placepicker','class'=>'form-control','data-map-container-id'=>'collapseTwo')); ?>

								</div>

							</div>  

							<div class="form-group row">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'jenjang'); ?>
								</div>   

								<div class="col-md-8">
									<?php echo $form->error($model,'jenjang'); ?>
									<?php
									echo $form->dropDownList($model,'jenjang',
										array(''=>'-- Pilih Pendidikan --','2'=>'SMP','3'=>'SMA','4'=>'SMK','5'=>'D1','6'=>'D2','7'=>'D3','8'=>'S1','9'=>'S2'),
										array(
											'class'=>'form-control',
											)                              
										);
										?>
									</div>

								</div>  


								<div class="form-group row">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'nilai'); ?>
									</div>   

									<div class="col-md-8">
										<?php echo $form->error($model,'nilai'); ?>
										<?php echo $form->textField($model,'nilai',array('class'=>'form-control')); ?>
									</div>

								</div> 


								<div class="form-group row">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'status'); ?>
									</div>   

									<div class="col-md-8">
										<?php echo $form->error($model,'status'); ?>
										<?php
										echo $form->radioButtonList($model,'status',
											array('1'=>'Tersedia','2'=>'Ditutup'),
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

									<div class="form-group row">
										<div class="col-md-12">  
											<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
										</div>
									</div>

									<?php $this->endWidget(); ?>

								</div><!-- form -->
							</div><!-- form -->

