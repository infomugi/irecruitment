<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Update',
	);

$this->pageTitle='Tambah Pendidikan Non Formal';
?>

<?php echo $this->renderPartial('_form_non_formal', array('model'=>$model)); ?>