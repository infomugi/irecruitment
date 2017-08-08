<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload SKCK';
?>

<?php echo $this->renderPartial('_form_skck', array('model'=>$model)); 
