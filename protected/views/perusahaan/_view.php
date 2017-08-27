<?php
/* @var $this PerusahaanController */
/* @var $data Perusahaan */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_perusahaan), array('view', 'id'=>$data->id_perusahaan)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_perusahaan',
		'nama',
		'alamat',
		'kontak',
		'email',
		'nama_pic',
		'kontak_pic',
		'industri',
		'status',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
