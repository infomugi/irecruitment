<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	$model->id_dokumen,
	);

	$this->pageTitle='Detail Dokumen';
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
		<?php echo CHtml::link('<i class='fa fa-edit'></i>', 
	 array('update', 'id'=>$model->id_dokumen,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Dokumen'));
 ?>
		<?php echo CHtml::link('<i class='fa fa-remove'></i>', 
	 array('delete', 'id'=>$model->id_dokumen,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Dokumen'));
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
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_dokumen,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Dokumen'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_dokumen,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Dokumen'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_dokumen',
		'tanggal',
		'cv',
		'ktp',
		'ijazah',
		'transkrip',
		'skck',
		'sertifikat',
		'people_id',
		'user_id',
		'verifikasi_id',
		'tanggal_verifikasi',
		'status',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

