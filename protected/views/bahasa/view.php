<?php
/* @var $this BahasaController */
/* @var $model Bahasa */

$this->breadcrumbs=array(
	'Bahasas'=>array('index'),
	$model->id_bahasa,
	);

	$this->pageTitle='Detail Bahasa';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Bahasa'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bahasa'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bahasa'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_bahasa,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bahasa'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_bahasa,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bahasa'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Bahasa'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bahasa'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bahasa'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_bahasa,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bahasa'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_bahasa,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bahasa'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_bahasa',
		'nama',
		'berbicara',
		'menulis',
		'membaca',
		'mengerti',
		'people_id',
		'user_id',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

