<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Kota', 'url'=>array('index')),
	array('label'=>'Kelola Kota', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Kota';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>