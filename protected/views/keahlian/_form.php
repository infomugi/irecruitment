<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'keahlian-form',
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
					<?php echo $form->labelEx($model,'word'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'word'); ?>
					<?php
					echo $form->radioButtonList($model,'word',
						array('1'=>'Ya','2'=>'Tidak'),
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
						<?php echo $form->labelEx($model,'excel'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'excel'); ?>
						<?php
						echo $form->radioButtonList($model,'excel',
							array('1'=>'Ya','2'=>'Tidak'),
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
							<?php echo $form->labelEx($model,'powerpoint'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'powerpoint'); ?>
							<?php
							echo $form->radioButtonList($model,'powerpoint',
								array('1'=>'Ya','2'=>'Tidak'),
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
								<?php echo $form->labelEx($model,'sql'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'sql'); ?>
								<?php
								echo $form->radioButtonList($model,'sql',
									array('1'=>'Ya','2'=>'Tidak'),
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
									<?php echo $form->labelEx($model,'lan'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'lan'); ?>
									<?php
									echo $form->radioButtonList($model,'lan',
										array('1'=>'Ya','2'=>'Tidak'),
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
										<?php echo $form->labelEx($model,'wan'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'wan'); ?>
										<?php
										echo $form->radioButtonList($model,'wan',
											array('1'=>'Ya','2'=>'Tidak'),
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
											<?php echo $form->labelEx($model,'bahasa_pascal'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'bahasa_pascal'); ?>
											<?php
											echo $form->radioButtonList($model,'bahasa_pascal',
												array('1'=>'Ya','2'=>'Tidak'),
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
												<?php echo $form->labelEx($model,'c'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'c'); ?>
												<?php
												echo $form->radioButtonList($model,'c',
													array('1'=>'Ya','2'=>'Tidak'),
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
													<?php echo $form->labelEx($model,'php'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'php'); ?>
													<?php
													echo $form->radioButtonList($model,'php',
														array('1'=>'Ya','2'=>'Tidak'),
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
														<?php echo $form->labelEx($model,'java'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'java'); ?>
														<?php
														echo $form->radioButtonList($model,'java',
															array('1'=>'Ya','2'=>'Tidak'),
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
														<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-danger btn-flat pull-right')); ?>
													</div>
												</div>

												<?php $this->endWidget(); ?>

</div></div><!-- form -->