<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	$model->id_dokumen=>array('view','id'=>$model->id_dokumen),
	'Edit',
	);

	$this->pageTitle='Edit Dokumen';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>