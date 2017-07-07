<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
	);

$this->pageTitle='Add User';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'Pelamar'=>$Pelamar)); ?>