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

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($Pelamar,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($Pelamar,'nama'); ?>
					<?php echo $form->textField($Pelamar,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($Pelamar,'tempat_lahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($Pelamar,'tempat_lahir'); ?>
					<?php echo $form->textField($Pelamar,'tempat_lahir',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($Pelamar,'tanggal_lahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($Pelamar,'tanggal_lahir'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'options'=>array(
							'showAnim'=>'fold',
							),
						'model'=>$Pelamar,
						'attribute'=>'tanggal_lahir',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($Pelamar->tanggal_lahir)),
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
						<?php echo $form->labelEx($Pelamar,'agama'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($Pelamar,'agama'); ?>
						<?php
						echo $form->radioButtonList($Pelamar,'agama',
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
							<?php echo $form->labelEx($Pelamar,'jenis_kelamin'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($Pelamar,'jenis_kelamin'); ?>
							<?php
							echo $form->radioButtonList($Pelamar,'jenis_kelamin',
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
								<?php echo $form->labelEx($Pelamar,'golongan_darah'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($Pelamar,'golongan_darah'); ?>
								<?php
								echo $form->radioButtonList($Pelamar,'golongan_darah',
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
									<?php echo $form->labelEx($Pelamar,'kewarganegaraan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($Pelamar,'kewarganegaraan'); ?>
									<?php
									echo $form->radioButtonList($Pelamar,'kewarganegaraan',
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
										<?php echo $form->labelEx($Pelamar,'provinsi_id'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($Pelamar,'provinsi_id'); ?>
										<?php 
										echo $form->dropDownList($Pelamar, "provinsi_id",
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
											<?php echo $form->labelEx($Pelamar,'kota_id'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($Pelamar,'kota_id'); ?>
											<?php echo $form->dropDownList($Pelamar, "kota_id",
												array(),
												array("empty"=>"-- Kota --", 'class'=>'form-control select2')
												); ?> 
											</div>

										</div>  	

										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($Pelamar,'hp'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($Pelamar,'hp'); ?>
												<?php echo $form->textField($Pelamar,'hp',array('class'=>'form-control')); ?>
											</div>

										</div>  																				

										<div class="form-group">
											<div class="col-md-12">  
											</br></br>
											<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrasi' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
										</div>
									</div>

									<?php $this->endWidget(); ?>

</div></div><!-- form -->