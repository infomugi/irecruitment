<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	$model->id_keluarga,
	);

	$this->pageTitle='Detail Keluarga';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class='fa fa-plus'></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Keluarga'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-tasks'></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keluarga'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-table'></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keluarga'));
		 ?>
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_keluarga,
		), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit Keluarga'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_keluarga,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keluarga'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Keluarga'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keluarga'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keluarga'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_keluarga,
		), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit Keluarga'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_keluarga,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keluarga'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_keluarga',
		'hubungan_keluarga',
		'nama',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'pendidikan_terakhir',
		'jabatan_pekerjaan',
		'nama_perusahaan',
		'keterangan',
		'user_id',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

