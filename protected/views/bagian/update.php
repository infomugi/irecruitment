<?php
/* @var $this BagianController */
/* @var $model Bagian */

$this->breadcrumbs=array(
	'Bagians'=>array('index'),
	$model->id_bagian=>array('view','id'=>$model->id_bagian),
	'Update',
	);

	$this->pageTitle='Edit Bagian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>