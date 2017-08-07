<?php
/* @var $this OrganisasiController */
/* @var $data Organisasi */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_organisasi), array('view', 'id'=>$data->id_organisasi)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_organisasi',
		'nama',
		'tempat',
		'jenis_kegiatan',
		'tahun',
		'jabatan',
		'people_id',
		'user_id',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
