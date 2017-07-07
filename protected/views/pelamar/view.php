<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_people,
	);

$this->menu=array(
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Pelamar';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-primary btn-flat','title'=>'Tambah Pelamar'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Pelamar'));
		?>
		<?php echo CHtml::link('Kelola',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Kelola Pelamar'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_people,
					), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Pelamar'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->id_people,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pelamar'));
							?>


							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'nama',
									'tempat_lahir',
									'tanggal_lahir',
									'agama',
									'jenis_kelamin',
									'golongan_darah',
									'kewarganegaraan',
									array('name'=>'kota_id','value'=>$model->Kota->name),
									array('name'=>'provinsi_id','value'=>$model->Provinsi->name),
									array('label'=>'Umur','value'=>Pelamar::model()->countBirth($model->tanggal_lahir)),
									),
									)); ?>

									<H4><i class="fa fa-html5"></i> Riwayat Pendidikan</H4>
									<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'pendidikan-grid',
										'summaryText'=>'',
										'dataProvider'=>$dataProvider,
										'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
										'columns'=>array(

											'instansi',
											'tahun_lulus',
											'nilai',
											'jurusan',

											array(
												'class'=>'CButtonColumn',
												'template'=>'{update}{delete}',
												'buttons'=>array(
													'update'=>
													array(
														'url'=>'Yii::app()->createUrl("pendidikan/update", array("id"=>$data->id_pendidikan))',
														),
													'delete'=>
													array(
														'url'=>'Yii::app()->createUrl("pendidikan/delete", array("id"=>$data->id_pendidikan))',
														),
													),
												),

											),
											)); ?>


									<STYLE>
										th{width:150px;}
									</STYLE>

