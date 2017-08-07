<?php
/* @var $this OrganisasiController */
/* @var $model Organisasi */

$this->breadcrumbs=array(
	'Organisasis'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Organisasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>