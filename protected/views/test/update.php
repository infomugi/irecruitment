<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->id_test=>array('view','id'=>$model->id_test),
	'Update',
	);

	$this->pageTitle='Edit Test';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>