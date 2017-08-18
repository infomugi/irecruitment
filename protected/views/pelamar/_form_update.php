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
					<?php echo $form->labelEx($model,'nik'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nik'); ?>
					<?php echo $model->nik; ?>
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
						array('L'=>'Laki-laki','P'=>'Perempuan'),
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
						<?php echo $form->labelEx($model,'agama'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'agama'); ?>
						<?php
						echo $form->radioButtonList($model,'agama',
							array('Islam'=>'Islam','Kristen'=>'Kristen','Hindu'=>'Hindu','Budha'=>'Budha'),
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
								<?php echo $form->labelEx($model,'status_menikah'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'status_menikah'); ?>
								<?php
								echo $form->radioButtonList($model,'status_menikah',
									array('1'=>'Sudah Menikah','2'=>'Belum Menikah'),
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
									<?php echo $form->labelEx($user,'username'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'username'); ?>
									<?php echo $form->textField($user,'username',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($user,'email'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($user,'email'); ?>
									<?php echo $form->textField($user,'email',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'golongan_darah'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'golongan_darah'); ?>
									<?php
									echo $form->radioButtonList($model,'golongan_darah',
										array('A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'),
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
										<?php echo $form->labelEx($model,'kewarganegaraan'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'kewarganegaraan'); ?>
										<?php
										echo $form->radioButtonList($model,'kewarganegaraan',
											array('WNI'=>'WNI','WNA'=>'WNA'),
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
											<?php echo $form->labelEx($model,'status_domisili'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'status_domisili'); ?>
											<?php
											echo $form->radioButtonList($model,'status_domisili',
												array('1'=>'Milik Sendiri','2'=>'Milik Orangtua','3'=>'Kontrak','4'=>'Kost','5'=>'Lainnya'),
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
												<?php echo $form->labelEx($model,'alamat_domisili'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'alamat_domisili'); ?>
												<?php echo $form->textField($model,'alamat_domisili',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'provinsi_id'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'provinsi_id'); ?>
												<?php 
												echo $form->dropDownList($model, "provinsi_id",
													CHtml::listData(Provinsi::model()->findAll(array('order'=>'name ASC')),
														'id', 'name'
														),
													array(
														'prompt'=>'-- Provinsi --.',
														'class'=>'form-control select2',
														'ajax' => array(
															'type'=>'POST', 
															'url'=>Yii::app()->createUrl('kota/sub'), 
															'update'=>'#Pelamar_kota_id', 
															'data'=>array('kota_id'=>'js:this.value'),
															))
													); 
													?> 
												</div>

											</div>  

											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'kota_id'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'kota_id'); ?>
													<?php echo $form->dropDownList($model, "kota_id",
														array(),
														array("empty"=>"-- Kota / Kab --", 'class'=>'form-control select2')
														); ?> 
													</div>

												</div>  	


												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'hp'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'hp'); ?>
														<?php echo $form->textField($model,'hp',array('class'=>'form-control','placeHolder'=>'HP')); ?>
													</div>

												</div>  

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'no_jamsostek'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'no_jamsostek'); ?>
														<?php echo $form->textField($model,'no_jamsostek',array('class'=>'form-control','placeHolder'=>'No. JAMSOSTEK')); ?>
													</div>

												</div>  



												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'no_sim'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'no_sim'); ?>
														<?php echo $form->textField($model,'no_sim',array('class'=>'form-control','placeHolder'=>'No. SIM')); ?>
													</div>

												</div>  



												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'no_npwp'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'no_npwp'); ?>
														<?php echo $form->textField($model,'no_npwp',array('class'=>'form-control','placeHolder'=>'No. NPWP')); ?>
													</div>

												</div>  


												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'kontak'); ?>
													</div>   

													<div class="col-sm-8">
														<div class="col-sm-6 no-padding">
															<?php echo $form->error($model,'telephone_pribadi'); ?>
															<?php echo $form->textField($model,'telephone_pribadi',array('class'=>'form-control','placeHolder'=>'Telp. Pribadi')); ?>
														</div>
														<div class="col-sm-6 no-padding">
															<?php echo $form->error($model,'telephone_rumah'); ?>
															<?php echo $form->textField($model,'telephone_rumah',array('class'=>'form-control','placeHolder'=>'Telp. Rumah')); ?>
														</div>
													</div>

												</div>  








												<div class="form-group">
													<div class="col-md-12">  
													</br></br>
													<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrasi' : 'Edit', array('class' => 'btn btn-success btn-flat pull-right')); ?>
												</div>
											</div>

											<?php $this->endWidget(); ?>

</div></div><!-- form -->