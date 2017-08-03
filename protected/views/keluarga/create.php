<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Keluarga';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>