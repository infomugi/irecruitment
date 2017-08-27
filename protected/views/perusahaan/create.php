<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	'Add',
	);

$this->pageTitle='Tambah Perusahaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>