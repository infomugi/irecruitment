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

			<?php echo $form->errorSummary($model); ?>

			<div class="form-group">
				<div class="col-md-4 col-xs-12">
					<?php echo $form->labelEx($model,'c1'); ?>
				</div>   

				<div class="col-md-8 col-xs-12">
					<?php echo $form->error($model,'c1'); ?>
					<?php echo $form->dropDownList($model, "c1",
						CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=1','order'=>'id_crips DESC')),
							'id_crips', 'keterangan'
							),
						array("empty"=>"-- Nilai Interview HR --", 'class'=>'form-control')
						); ?> 
					</div>
				</div>  


				<div class="form-group">
					<div class="col-md-4 col-xs-12">
						<?php echo $form->labelEx($model,'c2'); ?>
					</div>   

					<div class="col-md-8 col-xs-12">
						<?php echo $form->error($model,'c2'); ?>
						<?php echo $form->dropDownList($model, "c2",
							CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=2','order'=>'id_crips DESC')),
								'id_crips', 'keterangan'
								),
							array("empty"=>"-- Nilai Tes Komputer --", 'class'=>'form-control')
							); ?> 
						</div>
					</div>  


					<div class="form-group">
						<div class="col-md-4 col-xs-12">
							<?php echo $form->labelEx($model,'c3'); ?>
						</div>   

						<div class="col-md-8 col-xs-12">
							<?php echo $form->error($model,'c3'); ?>
							<?php echo $form->dropDownList($model, "c3",
								CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=3','order'=>'id_crips DESC')),
									'id_crips', 'keterangan'
									),
								array("empty"=>"-- Nilai Tes Psikotest --", 'class'=>'form-control')
								); ?> 
							</div>
						</div>  


						<div class="form-group">
							<div class="col-md-4 col-xs-12">
								<?php echo $form->labelEx($model,'c4'); ?>
							</div>   

							<div class="col-md-8 col-xs-12">
								<?php echo $form->error($model,'c4'); ?>
								<?php echo $form->dropDownList($model, "c4",
									CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=4','order'=>'id_crips DESC')),
										'id_crips', 'keterangan'
										),
									array("empty"=>"-- Nilai Test Inventory --", 'class'=>'form-control')
									); ?> 
								</div>
							</div>  


							<div class="form-group">
								<div class="col-md-4 col-xs-12">
									<?php echo $form->labelEx($model,'c5'); ?>
								</div>   

								<div class="col-md-8 col-xs-12">
									<?php echo $form->error($model,'c5'); ?>
									<?php echo $form->dropDownList($model, "c5",
										CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=5','order'=>'id_crips DESC')),
											'id_crips', 'keterangan'
											),
										array("empty"=>"-- Nilai Tes Kemampuan --", 'class'=>'form-control')
										); ?> 
									</div>
								</div>  


								<div class="form-group">
									<div class="col-md-4 col-xs-12">
										<?php echo $form->labelEx($model,'c6'); ?>
									</div>   

									<div class="col-md-8 col-xs-12">
										<?php echo $form->error($model,'c6'); ?>
										<?php echo $form->dropDownList($model, "c6",
											CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=6','order'=>'id_crips DESC')),
												'id_crips', 'keterangan'
												),
											array("empty"=>"-- Nilai Tes Suara --", 'class'=>'form-control')
											); ?> 
										</div>
									</div>  


									<div class="form-group">
										<div class="col-md-4 col-xs-12">
											<?php echo $form->labelEx($model,'c7'); ?>
										</div>   

										<div class="col-md-8 col-xs-12">
											<?php echo $form->error($model,'c7'); ?>
											<?php echo $form->dropDownList($model, "c7",
												CHtml::listData(Crips::model()->findAll(array('condition'=>'kriteria_id=7','order'=>'id_crips ASC')),
													'id_crips', 'keterangan'
													),
												array("empty"=>"-- Nilai Interview Client --", 'class'=>'form-control')
												); ?> 
											</div>
										</div>  

										<div class="form-group">
											<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-primary pull-right')); ?>
										</div>


										<?php $this->endWidget(); ?>

									</div>
								</div>
