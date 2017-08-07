<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload CV';
?>

<?php echo $this->renderPartial('_form_cv', array('model'=>$model)); 
