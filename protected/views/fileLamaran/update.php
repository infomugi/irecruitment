<?php
/* @var $this FileLamaranController */
/* @var $model FileLamaran */

$this->breadcrumbs=array(
	'File Lamarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);
	?>

	<h1>Upload Lamaran #<?php echo $model->id; ?></h1>

	<?php $this->renderPartial('_form', array('model'=>$model)); ?>