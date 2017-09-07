<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Staff';
?>

<?php echo $this->renderPartial('_form_password', array('model'=>$model)); ?>