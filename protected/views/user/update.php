<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Edit',
	);

$this->pageTitle='Edit User';
?>

<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>