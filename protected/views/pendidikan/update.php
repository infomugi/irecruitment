<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	$model->id_pendidikan=>array('view','id'=>$model->id_pendidikan),
	'Edit',
	);

	$this->pageTitle='Edit Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>