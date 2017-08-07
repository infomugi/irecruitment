<?php
/* @var $this OrganisasiController */
/* @var $model Organisasi */

$this->breadcrumbs=array(
	'Organisasis'=>array('index'),
	$model->id_organisasi=>array('view','id'=>$model->id_organisasi),
	'Edit',
	);

	$this->pageTitle='Edit Organisasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>