<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Level';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>