<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Provinsi', 'url'=>array('index')),
	array('label'=>'Kelola Provinsi', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Provinsi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>