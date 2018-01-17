<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_hrd=>array('view','id'=>$model->id_hrd),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Tambah Pelamar', 'url'=>array('create')),
	array('label'=>'Detail Pelamar', 'url'=>array('view', 'id'=>$model->id_hrd)),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
	);	

$this->pageTitle='Edit Data Pribadi';
?>

<?php echo $this->renderPartial('_form_update', array('model'=>$model,'user'=>$user)); ?>