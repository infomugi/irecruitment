<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'perusahaan-form',
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
					<?php echo $form->labelEx($model,'alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alamat'); ?>
					<?php echo $form->textArea($model,'alamat',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kontak'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kontak'); ?>
					<?php echo $form->textField($model,'kontak',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'nama_pic'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama_pic'); ?>
					<?php echo $form->textField($model,'nama_pic',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kontak_pic'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kontak_pic'); ?>
					<?php echo $form->textField($model,'kontak_pic',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'industri'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'industri'); ?>
					<?php echo $form->textField($model,'industri',array('class'=>'form-control')); ?>
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
						array('1'=>'Aktif','0'=>'Tidak Aktif'),
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
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->