<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_people=>array('view','id'=>$model->id_people),
	'Update',
	);

	$this->pageTitle='Edit Password';
	?>

	<?php echo $this->renderPartial('_form_password', array('model'=>$model,'user'=>$user)); ?>