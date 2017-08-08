<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Sertifikat';
?>

<?php echo $this->renderPartial('_form_sertifikat', array('model'=>$model)); 
