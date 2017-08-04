<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Add',
	);

$this->pageTitle='Update Pendidikan Formal';
?>

<?php echo $this->renderPartial('_form_formal', array('model'=>$model)); ?>