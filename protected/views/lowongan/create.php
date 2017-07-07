<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Lowongan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>