<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	'Add',
	);

$this->pageTitle='Upload Ijazah';
?>

<?php echo $this->renderPartial('_form_ijazah', array('model'=>$model)); 
