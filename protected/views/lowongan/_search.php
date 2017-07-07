<?php
/* @var $this LowonganController */
/* @var $model Lowongan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_lowongan'); ?>
		<?php echo $form->textField($model,'id_lowongan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bagian'); ?>
		<?php echo $form->textField($model,'bagian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipe'); ?>
		<?php echo $form->textField($model,'tipe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi_pekerjaan'); ?>
		<?php echo $form->textArea($model,'deskripsi_pekerjaan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi_kebutuhan'); ?>
		<?php echo $form->textArea($model,'deskripsi_kebutuhan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_orang'); ?>
		<?php echo $form->textField($model,'jumlah_orang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kebutuhan'); ?>
		<?php echo $form->textField($model,'tanggal_kebutuhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi',array('size'=>60,'maxlength'=>255)); ?>
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