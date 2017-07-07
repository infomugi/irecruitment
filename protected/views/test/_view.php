<?php
/* @var $this TestController */
/* @var $data Test */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_test), array('view', 'id'=>$data->id_test)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lamaran_id')); ?>:</b>
	<?php echo CHtml::encode($data->lamaran_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lowongan_id')); ?>:</b>
	<?php echo CHtml::encode($data->lowongan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status1')); ?>:</b>
	<?php echo CHtml::encode($data->status1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berita_acara1')); ?>:</b>
	<?php echo CHtml::encode($data->berita_acara1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status2')); ?>:</b>
	<?php echo CHtml::encode($data->status2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berita_acara2')); ?>:</b>
	<?php echo CHtml::encode($data->berita_acara2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status3')); ?>:</b>
	<?php echo CHtml::encode($data->status3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berita_acara3')); ?>:</b>
	<?php echo CHtml::encode($data->berita_acara3); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
