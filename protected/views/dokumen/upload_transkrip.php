<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Transkrip';
?>

<?php echo $this->renderPartial('_form_transkrip', array('model'=>$model)); 
