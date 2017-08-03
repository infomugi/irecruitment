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


<?php if($model->tempat_lahir!=""){ ?>

	<?php echo CHtml::link('<i class="ti-write"></i> Profile', 
		array('update', 'id'=>$model->id_people,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pelamar'));
	?>

	<?php echo CHtml::link('<i class="ti-lock"></i> Password', 
		array('password', 'id'=>$model->id_people,
			), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pelamar'));
	?>	

	<?php echo CHtml::link('<i class="ti-id-badge"></i> Lamaran', 
		array('filelamaran/history',
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Lamaran'));
	?>

	<?php echo CHtml::link('<i class="ti-clipboard"></i> Keluarga', 
		array('keluarga/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Keluarga'));
	?>

	<?php echo CHtml::link('<i class="ti-clipboard"></i> Pendidikan', 
		array('pendidikan/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Pendidikan'));
	?>

	<?php echo CHtml::link('<i class="ti-calendar"></i> Pekerjaan', 
		array('pekerjaan/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Pekerjaan'));
	?>


	<h3><span class="ti-user"></span> Profile - <?php echo $model->nama; ?></h3>
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

	<H4><i class="ti-clipboard"></i> Keluarga</H4>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'keluarga-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataFamily,
		'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
		'columns'=>array(

			array('name'=>'hubungan_keluarga','value'=>'Keluarga::model()->relationship_family($data->hubungan_keluarga)'),
			'nama',
			array('name'=>'jenis_kelamin','value'=>'Keluarga::model()->gender($data->jenis_kelamin)'),
			'tempat_lahir',
			'tanggal_lahir',
			array('name'=>'pendidikan_terakhir','value'=>'Keluarga::model()->school($data->pendidikan_terakhir)'),
			array('name'=>'jabatan_pekerjaan','value'=>'$data->Jabatan->nama'),
			'nama_perusahaan',
			'keterangan',

			array(
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'buttons'=>array(
					'update'=>
					array(
						'url'=>'Yii::app()->createUrl("keluarga/update", array("id"=>$data->id_keluarga))',
						),
					'delete'=>
					array(
						'url'=>'Yii::app()->createUrl("keluarga/delete", array("id"=>$data->id_keluarga))',
						),
					),
				),

			),
		)); ?>


	<H4><i class="ti-calendar"></i> Riwayat Pendidikan Formal</H4>
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


	<H4><i class="ti-calendar"></i> Riwayat Pendidikan Non Formal</H4>
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

	<H4><i class="ti-clipboard"></i> Riwayat Pekerjaan</H4>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pendidikan-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataJobs,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			'instansi',
			'tahun',
			'gaji',
			'bagian',

			array(
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'buttons'=>array(
					'update'=>
					array(
						'url'=>'Yii::app()->createUrl("pekerjaan/update", array("id"=>$data->id_pekerjaan))',
						),
					'delete'=>
					array(
						'url'=>'Yii::app()->createUrl("pekerjaan/delete", array("id"=>$data->id_pekerjaan))',
						),
					),
				),

			),
		)); ?>

	<?php }else{ ?>
		<div class="alert alert-warning">
			Selamat Datang <span class="text-bold" style="font-weight:700;"><?php echo YII::app()->user->name; ?></span>, Data Profile Anda Belum Lengkap (
				<?php echo CHtml::link('Klik Disini', 
					array('update', 'id'=>$model->id_people,
						),array('class'=>'label label-danger'));
				?> Untuk Melengkapi
				)
		</div>
		<?php } ?>


		<STYLE>
			th{width:150px;}
		</STYLE>
