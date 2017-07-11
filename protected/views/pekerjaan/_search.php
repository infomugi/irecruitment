<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id_pekerjaan'); ?>
			<?php echo $form->textField($model,'id_pekerjaan'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'instansi'); ?>
			<?php echo $form->textField($model,'instansi',array('size'=>60,'maxlength'=>100)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'tahun'); ?>
			<?php echo $form->textField($model,'tahun',array('size'=>5,'maxlength'=>5)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'gaji'); ?>
			<?php echo $form->textField($model,'gaji'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'bagian'); ?>
			<?php echo $form->textField($model,'bagian',array('size'=>50,'maxlength'=>50)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'people_id'); ?>
			<?php echo $form->textField($model,'people_id'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->