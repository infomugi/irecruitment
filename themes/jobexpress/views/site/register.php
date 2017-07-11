<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
	);

$this->pageTitle=Yii::app()->name . ' - Register';
?>

<?php echo $this->renderPartial('_form_register', array('model'=>$model,'Pelamar'=>$Pelamar)); ?>