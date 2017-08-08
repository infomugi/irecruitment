<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload KTP';
?>

<?php echo $this->renderPartial('_form_ktp', array('model'=>$model)); 
