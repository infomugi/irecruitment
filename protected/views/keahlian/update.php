<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs=array(
	'Keahlians'=>array('index'),
	$model->id_keahlian=>array('view','id'=>$model->id_keahlian),
	'Edit',
	);

	$this->pageTitle='Edit Keahlian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>