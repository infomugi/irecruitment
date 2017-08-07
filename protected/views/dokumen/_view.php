<?php
/* @var $this DokumenController */
/* @var $data Dokumen */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_dokumen), array('view', 'id'=>$data->id_dokumen)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_dokumen',
		'tanggal',
		'cv',
		'ktp',
		'ijazah',
		'transkrip',
		'skck',
		'sertifikat',
		'people_id',
		'user_id',
		'verifikasi_id',
		'tanggal_verifikasi',
		'status',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
