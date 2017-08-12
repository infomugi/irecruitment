<?php
/* @var $this CripsController */
/* @var $model Crips */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'id_crips'); ?>
		<?php echo $form->textField($model,'id_crips'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'kriteria_id'); ?>
		<?php echo $form->textField($model,'kriteria_id'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->