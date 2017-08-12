<?php
/* @var $this CripsController */
/* @var $data Crips */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_crips), array('view', 'id'=>$data->id_crips)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('kriteria_id')); ?>:</b>
	<?php echo CHtml::encode($data->kriteria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />

        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
