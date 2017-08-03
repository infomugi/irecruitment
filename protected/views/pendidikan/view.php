<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	$model->id_pendidikan,
	);

	$this->pageTitle='Detail Pendidikan';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Pendidikan'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pendidikan'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pendidikan'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_pendidikan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pendidikan'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_pendidikan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pendidikan'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Pendidikan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pendidikan'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pendidikan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_pendidikan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pendidikan'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_pendidikan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pendidikan'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_pendidikan',
		'jenjang',
		'instansi',
		'kota',
		'jurusan',
		'mulai',
		'selesai',
		'tahun_lulus',
		'status',
		'nilai',
		'jenis',
		'people_id',
		'user_id',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

