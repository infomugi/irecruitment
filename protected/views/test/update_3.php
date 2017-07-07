<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Hasil Test Ke-3';
	?>

	<?php echo $this->renderPartial('_form_3', array('model'=>$model)); ?>