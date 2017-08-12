<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */

$this->breadcrumbs=array(
	'Kriterias'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Kriteria';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>