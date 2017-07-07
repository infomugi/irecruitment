<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->id_test,
	);

	$this->pageTitle='Detail Test';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('create'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Test'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Test'));
		 ?>
		<?php echo CHtml::link('Kalola',
	 array('admin'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Test'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_test,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Test'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_test,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Test'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_test',
		'tanggal',
		'lamaran_id',
		'lowongan_id',
		'user_id',
		'status1',
		'berita_acara1',
		'status2',
		'berita_acara2',
		'status3',
		'berita_acara3',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

