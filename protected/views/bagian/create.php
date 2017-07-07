<?php
/* @var $this BagianController */
/* @var $model Bagian */

$this->breadcrumbs=array(
	'Bagians'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Bagian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>