<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	$model->id_pekerjaan,
	);

$this->menu=array(
	array('label'=>'Daftar Pekerjaan', 'url'=>array('index')),
	array('label'=>'Kelola Pekerjaan', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Pekerjaan';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-success btn-flat','title'=>'Tambah Pekerjaan'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Pekerjaan'));
		?>
		<?php echo CHtml::link('Kalola',
			array('admin'),
			array('class' => 'btn btn-success btn-flat','title'=>'Kelola Pekerjaan'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_pekerjaan,
					), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit Pekerjaan'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_pekerjaan,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pekerjaan'));
							?>


							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'instansi',
									'tahun',
									'gaji',
									'bagian',
									),
									)); ?>


							<STYLE>
								th{width:150px;}
							</STYLE>

