<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Verifikasi'=>array('index'),
	$model->Customer->nama=>array('view','id'=>$model->id_penilaian_saw),
	'Konfirmasi',
	);

	$this->pageTitle='Verifikasi Kelayakan Nasabah';
	?>

	<?php echo $this->renderPartial('_form_verifikasi', array('model'=>$model)); ?>