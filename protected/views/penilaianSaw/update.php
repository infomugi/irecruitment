<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	$model->id_penilaian_saw=>array('view','id'=>$model->id_penilaian_saw),
	'Update',
	);

	$this->pageTitle='Edit Penilaian SAW';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>