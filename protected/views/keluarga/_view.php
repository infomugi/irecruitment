<?php
/* @var $this KeluargaController */
/* @var $data Keluarga */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_keluarga), array('view', 'id'=>$data->id_keluarga)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_keluarga',
		'hubungan_keluarga',
		'nama',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'pendidikan_terakhir',
		'jabatan_pekerjaan',
		'nama_perusahaan',
		'keterangan',
		'user_id',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
