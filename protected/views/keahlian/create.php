<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs=array(
	'Keahlians'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Keahlian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>