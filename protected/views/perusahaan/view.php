<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	$model->id_perusahaan,
	);

	$this->pageTitle='Detail Perusahaan';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Perusahaan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Perusahaan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Perusahaan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->id_perusahaan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Perusahaan'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->id_perusahaan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Perusahaan'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Perusahaan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Perusahaan'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Perusahaan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_perusahaan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Perusahaan'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_perusahaan,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Perusahaan'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_perusahaan',
		'nama',
		'alamat',
		'kontak',
		'email',
		'nama_pic',
		'kontak_pic',
		'industri',
		'status',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

