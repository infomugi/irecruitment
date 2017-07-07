<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	'Tambah',
	);
$this->menu=array(
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
);
	$this->pageTitle='Tambah Pelamar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>