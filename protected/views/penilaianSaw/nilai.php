<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	'Buat',
	);

	$this->pageTitle='Buat Penilaian';
	?>

	<?php echo $this->renderPartial('_form_nilai', array('model'=>$model)); ?>