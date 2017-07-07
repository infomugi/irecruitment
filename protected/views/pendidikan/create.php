<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Pendidikan', 'url'=>array('index')),
	array('label'=>'Kelola Pendidikan', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>