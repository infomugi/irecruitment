<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Dokumen';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>