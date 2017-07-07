<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Hasil Test Ke-1';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>