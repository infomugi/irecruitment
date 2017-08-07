<?php
/* @var $this KeahlianController */
/* @var $model Keahlian */

$this->breadcrumbs=array(
	'Keahlians'=>array('index'),
	$model->id_keahlian,
	);

	$this->pageTitle='Detail Keahlian';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Keahlian'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keahlian'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keahlian'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_keahlian,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Keahlian'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_keahlian,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keahlian'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Keahlian'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keahlian'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keahlian'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_keahlian,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Keahlian'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_keahlian,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keahlian'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_keahlian',
		'word',
		'excel',
		'powerpoint',
		'sql',
		'lan',
		'wan',
		'bahasa_pascal',
		'c',
		'php',
		'java',
		'people_id',
		'user_id',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

