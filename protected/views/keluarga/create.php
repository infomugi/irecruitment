<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	'Add',
	);

$this->pageTitle='Tambah Data Keluarga';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>