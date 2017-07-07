<?php
/* @var $this JabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Jabatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>