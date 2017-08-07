<?php
/* @var $this DokumenController */
/* @var $model Dokumen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dokumen'); ?>
		<?php echo $form->textField($model,'id_dokumen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cv'); ?>
		<?php echo $form->textField($model,'cv',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ktp'); ?>
		<?php echo $form->textField($model,'ktp',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ijazah'); ?>
		<?php echo $form->textField($model,'ijazah',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transkrip'); ?>
		<?php echo $form->textField($model,'transkrip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skck'); ?>
		<?php echo $form->textField($model,'skck',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sertifikat'); ?>
		<?php echo $form->textField($model,'sertifikat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'people_id'); ?>
		<?php echo $form->textField($model,'people_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verifikasi_id'); ?>
		<?php echo $form->textField($model,'verifikasi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_verifikasi'); ?>
		<?php echo $form->textField($model,'tanggal_verifikasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->