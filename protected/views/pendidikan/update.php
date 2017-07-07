<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	$model->id_pendidikan=>array('view','id'=>$model->id_pendidikan),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Pendidikan', 'url'=>array('index')),
	array('label'=>'Tambah Pendidikan', 'url'=>array('create')),
	array('label'=>'Detail Pendidikan', 'url'=>array('view', 'id'=>$model->id_pendidikan)),
	array('label'=>'Kelola Pendidikan', 'url'=>array('admin')),
);	

	$this->pageTitle='Edit Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>