<?php
/* @var $this KriteriaController */
/* @var $data Kriteria */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_kriteria), array('view', 'id'=>$data->id_kriteria)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::encode($data->kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atribut')); ?>:</b>
	<?php echo CHtml::encode($data->atribut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bobot')); ?>:</b>
	<?php echo CHtml::encode($data->bobot); ?>
	<br />

        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
