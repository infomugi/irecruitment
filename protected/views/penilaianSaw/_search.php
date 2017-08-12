<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'id_penilaian_saw'); ?>
		<?php echo $form->textField($model,'id_penilaian_saw'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'penilai_id'); ?>
		<?php echo $form->textField($model,'penilai_id'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c1'); ?>
		<?php echo $form->textField($model,'c1'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c2'); ?>
		<?php echo $form->textField($model,'c2'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c3'); ?>
		<?php echo $form->textField($model,'c3'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c4'); ?>
		<?php echo $form->textField($model,'c4'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c5'); ?>
		<?php echo $form->textField($model,'c5'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c6'); ?>
		<?php echo $form->textField($model,'c6'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'c7'); ?>
		<?php echo $form->textField($model,'c7'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->