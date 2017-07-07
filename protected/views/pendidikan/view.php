<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	$model->id_pendidikan,
	);

$this->menu=array(
	array('label'=>'Daftar Pendidikan', 'url'=>array('index')),
	array('label'=>'Kelola Pendidikan', 'url'=>array('admin')),
);
	$this->pageTitle='Detail Pendidikan';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Pendidikan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Pendidikan'));
		 ?>
		<?php echo CHtml::link('Kalola',
	 array('admin'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Pendidikan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_pendidikan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pendidikan'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_pendidikan,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pendidikan'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_pendidikan',
		'instansi',
		'tahun_lulus',
		'nilai',
		'jurusan',
		'people_id',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

