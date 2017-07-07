<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Provinsi', 'url'=>array('index')),
	array('label'=>'Tambah Provinsi', 'url'=>array('create')),
	array('label'=>'Detail Provinsi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Provinsi', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Provinsi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>