<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Pekerjaan', 'url'=>array('index')),
	array('label'=>'Kelola Pekerjaan', 'url'=>array('admin')),
	);
$this->pageTitle='Tambah Pekerjaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>