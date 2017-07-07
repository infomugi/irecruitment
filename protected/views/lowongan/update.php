<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan=>array('view','id'=>$model->id_lowongan),
	'Update',
	);

	$this->pageTitle='Edit Lowongan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>