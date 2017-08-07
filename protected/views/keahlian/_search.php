<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_keahlian'); ?>
		<?php echo $form->textField($model,'id_keahlian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'word'); ?>
		<?php echo $form->textField($model,'word'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excel'); ?>
		<?php echo $form->textField($model,'excel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'powerpoint'); ?>
		<?php echo $form->textField($model,'powerpoint'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sql'); ?>
		<?php echo $form->textField($model,'sql'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lan'); ?>
		<?php echo $form->textField($model,'lan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wan'); ?>
		<?php echo $form->textField($model,'wan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bahasa_pascal'); ?>
		<?php echo $form->textField($model,'bahasa_pascal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c'); ?>
		<?php echo $form->textField($model,'c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'php'); ?>
		<?php echo $form->textField($model,'php'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'java'); ?>
		<?php echo $form->textField($model,'java'); ?>
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