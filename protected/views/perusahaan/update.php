<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	$model->id_perusahaan=>array('view','id'=>$model->id_perusahaan),
	'Edit',
	);

	$this->pageTitle='Edit Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>