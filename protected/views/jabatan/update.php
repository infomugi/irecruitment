<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	$model->id_jabatan=>array('view','id'=>$model->id_jabatan),
	'Update',
	);

	$this->pageTitle='Edit Jabatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>