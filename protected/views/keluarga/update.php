<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	$model->id_keluarga=>array('view','id'=>$model->id_keluarga),
	'Edit',
	);

	$this->pageTitle='Edit Keluarga';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>