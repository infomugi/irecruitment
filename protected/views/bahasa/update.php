<?php
/* @var $this BahasaController */
/* @var $model Bahasa */

$this->breadcrumbs=array(
	'Bahasas'=>array('index'),
	$model->id_bahasa=>array('view','id'=>$model->id_bahasa),
	'Edit',
	);

	$this->pageTitle='Edit Bahasa';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>