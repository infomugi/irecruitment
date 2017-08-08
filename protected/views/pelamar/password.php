<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	'Edit Password',
	);

$this->pageTitle='Edit Password';
?>

<?php echo $this->renderPartial('_form_password', array('user'=>$user)); ?>