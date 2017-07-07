<?php
/* @var $this FileLamaranController */
/* @var $model FileLamaran */

$this->breadcrumbs=array(
	'File Lamarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FileLamaran', 'url'=>array('index')),
	array('label'=>'Manage FileLamaran', 'url'=>array('admin')),
);
?>

<h1>Create FileLamaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>