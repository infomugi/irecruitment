<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Hasil Test Ke-2';
	?>

	<?php echo $this->renderPartial('_form_2', array('model'=>$model)); ?>