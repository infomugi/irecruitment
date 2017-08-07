<?php
/* @var $this DokumenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dokumens',
	);

	$this->pageTitle='List Dokumen';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Dokumen'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Dokumen'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Dokumen'));
		 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Dokumen'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Dokumen'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Dokumen'));
		 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

