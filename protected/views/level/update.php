<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->level_ID=>array('view','id'=>$model->level_ID),
	'Update',
	);

	$this->pageTitle='Edit Level';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>