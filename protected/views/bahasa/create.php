<?php
/* @var $this BahasaController */
/* @var $model Bahasa */

$this->breadcrumbs=array(
	'Bahasas'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bahasa';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>