<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Pendidikan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>