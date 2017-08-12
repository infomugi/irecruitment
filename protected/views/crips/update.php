<?php
/* @var $this CripsController */
/* @var $model Crips */

$this->breadcrumbs=array(
	'Crips'=>array('index'),
	$model->id_crips=>array('view','id'=>$model->id_crips),
	'Update',
	);

	$this->pageTitle='Edit Crips';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>