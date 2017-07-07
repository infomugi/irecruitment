<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Kota', 'url'=>array('index')),
	array('label'=>'Tambah Kota', 'url'=>array('create')),
	array('label'=>'Detail Kota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Kelola Kota', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Kota';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>