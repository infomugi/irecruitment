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
$this->pageTitle='Profile - '.$model->nama;
?>



<?php echo CHtml::link('Edit Profile', 
	array('update', 'id'=>$model->id_people,
		), array('class' => 'btn btn-primary btn-flat', 'title'=>'Edit Pelamar'));
		?>

		<?php echo CHtml::link('Riwayat Lamaran', 
			array('filelamaran/history',
				), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Lamaran'));
				?>

				<?php echo CHtml::link('Riwayat Pendidikan', 
					array('pendidikan/create', 'id'=>$model->id_people,
						), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Pendidikan'));
						?>

						<h3><i class="fa fa-github-alt"></i> Profile - <?php echo $model->nama; ?></h3>
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
								array('label'=>'Umur','value'=>Pelamar::model()->countBirth($model->tanggal_lahir)." Tahun"),
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
