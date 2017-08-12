<?php
/* @var $this CripsController */
/* @var $model Crips */

$this->breadcrumbs=array(
	'Crips'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Crips';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>