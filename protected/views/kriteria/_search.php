<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'id_kriteria'); ?>
		<?php echo $form->textField($model,'id_kriteria'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'kode'); ?>
		<?php echo $form->textField($model,'kode',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'atribut'); ?>
		<?php echo $form->textField($model,'atribut'); ?>
	</div>

	<div class="row"><div class="form-group">
		<?php echo $form->label($model,'bobot'); ?>
		<?php echo $form->textField($model,'bobot'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->