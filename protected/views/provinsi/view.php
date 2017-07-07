<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	$model->name,
	);

$this->menu=array(
	array('label'=>'Daftar Provinsi', 'url'=>array('index')),
	array('label'=>'Kelola Provinsi', 'url'=>array('admin')),
);
	$this->pageTitle='Detail Provinsi';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Provinsi'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Provinsi'));
		 ?>
		<?php echo CHtml::link('Kalola',
	 array('admin'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Provinsi'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Provinsi'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Provinsi'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'name',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

