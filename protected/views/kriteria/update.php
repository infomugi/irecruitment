<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */

$this->breadcrumbs=array(
	'Kriterias'=>array('index'),
	$model->id_kriteria=>array('view','id'=>$model->id_kriteria),
	'Update',
	);

	$this->pageTitle='Edit Kriteria';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>