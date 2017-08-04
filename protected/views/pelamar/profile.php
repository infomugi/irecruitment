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
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Pelamar'));
	?>

	<?php echo CHtml::link('<i class="ti-lock"></i> Password', 
		array('password', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Pelamar'));
	?>	

	<?php echo CHtml::link('<i class="ti-id-badge"></i> Lamaran', 
		array('filelamaran/history',
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Lamaran'));
	?>


	<?php echo CHtml::link('<i class="ti-calendar"></i> Pekerjaan', 
		array('pekerjaan/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-flat', 'title'=>'Riwayat Pekerjaan'));
	?>


	<h3><span class="ti-user"></span> Profile - <?php echo $model->nama; ?></h3>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
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



	<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
		array('keluarga/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-warning btn-sm pull-right', 'title'=>'Riwayat Keluarga'));
	?><i class="ti-clipboard pull-left"></i> Keluarga</H4>


	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'keluarga-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataFamily,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
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
				'header'=>'Action',
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


	<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
		array('pendidikan/formal', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pendidikan Formal'));
	?><i class="ti-clipboard pull-left"></i> Pendidikan Formal</H4>


	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pendidikan-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataFormal,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			'instansi',
			'mulai',
			'selesai',
			'tahun_lulus',
			'nilai',
			'jurusan',
			'nilai',

			array(
				'class'=>'CButtonColumn',
				'header'=>'Action',
				'template'=>'{update}{delete}',
				'buttons'=>array(
					'update'=>
					array(
						'url'=>'Yii::app()->createUrl("pendidikan/updateformal", array("id"=>$data->id_pendidikan))',
						),
					'delete'=>
					array(
						'url'=>'Yii::app()->createUrl("pendidikan/delete", array("id"=>$data->id_pendidikan))',
						),
					),
				),

			),
		)); ?>	


	<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
		array('pendidikan/nonformal', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pendidikan Non Formal'));
	?><i class="ti-clipboard pull-left"></i> Pendidikan Non Formal</H4>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'non-pendidikan-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataNonFormal,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			array('name'=>'macam','value'=>'Pendidikan::model()->macam($data->macam)'),
			'mulai',
			'selesai',
			'instansi',
			'no_dokumen',

			array(
				'class'=>'CButtonColumn',
				'header'=>'Action',
				'template'=>'{update}{delete}',
				'buttons'=>array(
					'update'=>
					array(
						'url'=>'Yii::app()->createUrl("pendidikan/updatenonformal", array("id"=>$data->id_pendidikan))',
						),
					'delete'=>
					array(
						'url'=>'Yii::app()->createUrl("pendidikan/delete", array("id"=>$data->id_pendidikan))',
						),
					),
				),

			),
		)); ?>	


	<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
		array('bahasa/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Kemampuan Bahasa'));
	?><i class="ti-clipboard pull-left"></i> Kemampuan Bahasa</H4>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'non-pendidikan-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataBahasa,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			'nama',
			array('name'=>'berbicara','value'=>'Bahasa::model()->grade($data->berbicara)'),
			array('name'=>'menulis','value'=>'Bahasa::model()->grade($data->menulis)'),
			array('name'=>'membaca','value'=>'Bahasa::model()->grade($data->membaca)'),
			array('name'=>'mengerti','value'=>'Bahasa::model()->grade($data->mengerti)'),

			array(
				'class'=>'CButtonColumn',
				'header'=>'Action',
				'template'=>'{update}{delete}',
				'buttons'=>array(
					'update'=>
					array(
						'url'=>'Yii::app()->createUrl("bahasa/update", array("id"=>$data->id_bahasa))',
						),
					'delete'=>
					array(
						'url'=>'Yii::app()->createUrl("bahasa/delete", array("id"=>$data->id_bahasa))',
						),
					),
				),

			),
		)); ?>	

	<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
		array('pekerjaan/create', 'id'=>$model->id_people,
			), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pekerjaan'));
	?><i class="ti-clipboard pull-left"></i> Pekerjaan</H4>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pekerjaan-grid',
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
				'header'=>'Action',
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
