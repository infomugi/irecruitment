<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	$model->id_pekerjaan=>array('view','id'=>$model->id_pekerjaan),
	'Update',
	);

$this->menu=array(
	array('label'=>'Daftar Pekerjaan', 'url'=>array('index')),
	array('label'=>'Tambah Pekerjaan', 'url'=>array('create')),
	array('label'=>'Detail Pekerjaan', 'url'=>array('view', 'id'=>$model->id_pekerjaan)),
	array('label'=>'Kelola Pekerjaan', 'url'=>array('admin')),
	);	

$this->pageTitle='Edit Pekerjaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>