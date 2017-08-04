<?php
/* @var $this BahasaController */
/* @var $model Bahasa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bahasa'); ?>
		<?php echo $form->textField($model,'id_bahasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berbicara'); ?>
		<?php echo $form->textField($model,'berbicara'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menulis'); ?>
		<?php echo $form->textField($model,'menulis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membaca'); ?>
		<?php echo $form->textField($model,'membaca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mengerti'); ?>
		<?php echo $form->textField($model,'mengerti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'people_id'); ?>
		<?php echo $form->textField($model,'people_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->