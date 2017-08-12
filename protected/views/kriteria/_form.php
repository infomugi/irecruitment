<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'kriteria-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kode'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kode'); ?>
					<?php echo $form->textField($model,'kode',array('class'=>'form-control md-input')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control md-input')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'atribut'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'atribut'); ?>
					<?php
					echo $form->radioButtonList($model,'atribut',
						array('1'=>'Benefit','2'=>'Cost'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=> '
								padding-left:5px;
								width: 75px;
								float: left;
								'),
							'style'=>'float:left;',
							)                              
						);
						?>
					</div>

				</div>  

				
				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'bobot'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'bobot'); ?>
						<?php echo $form->textField($model,'bobot',array('class'=>'form-control md-input')); ?>
					</div>

				</div>  

				<div class="form-group">
					<div class="col-md-12">  
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-danger pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div></div><!-- form -->