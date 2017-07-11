<?php
/* @var $this PendidikanController */
/* @var $data Pendidikan */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->id_pekerjaan), array('view', 'id'=>$data->id_pekerjaan)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
				<?php echo CHtml::encode($data->instansi); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
				<?php echo CHtml::encode($data->tahun); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('gaji')); ?>:</b>
				<?php echo CHtml::encode($data->gaji); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('bagian')); ?>:</b>
				<?php echo CHtml::encode($data->bagian); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('people_id')); ?>:</b>
				<?php echo CHtml::encode($data->people_id); ?>
				<br />

				

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
