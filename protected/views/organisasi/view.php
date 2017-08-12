<?php
/* @var $this OrganisasiController */
/* @var $model Organisasi */

$this->breadcrumbs=array(
	'Organisasis'=>array('index'),
	$model->id_organisasi,
	);

	$this->pageTitle='Detail Organisasi';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Organisasi'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Organisasi'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Organisasi'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_organisasi,
		), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit Organisasi'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_organisasi,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Organisasi'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Organisasi'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Organisasi'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Organisasi'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_organisasi,
		), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit Organisasi'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_organisasi,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Organisasi'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_organisasi',
		'nama',
		'tempat',
		'jenis_kegiatan',
		'tahun',
		'jabatan',
		'people_id',
		'user_id',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

