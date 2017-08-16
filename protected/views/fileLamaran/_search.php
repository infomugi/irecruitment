<?php
/* @var $this FileLamaranController */
/* @var $model FileLamaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_file'); ?>
		<?php echo $form->textField($model,'id_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_lamaran'); ?>
		<?php echo $form->textField($model,'file_lamaran',array('size'=>60,'maxlength'=>250)); ?>
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