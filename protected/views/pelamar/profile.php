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
// $this->pageTitle='Data Diri - '.ucfirst($model->nama);
$this->pageTitle='Profil';
?>


<?php if($model->tempat_lahir!=""){ ?>

	<h3><span class="ti-user"></span> <span class="hidden-xs"><?php echo ucfirst($model->nama); ?></span> <?php echo CHtml::link('<i class="ti-user"></i> Edit Data Pribadi', 
		array('pelamar/update',
			), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Upload Foto'));
	?></h3>

	<div class="row">
		<div class="col-md-7">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
				'attributes'=>array(
					'nama',
					'tempat_lahir',
					'tanggal_lahir',
					array('name'=>'agama','value'=>Pelamar::model()->religion($model->agama)),
					'jenis_kelamin',
					
					array('label'=>'Umur','value'=>Pelamar::model()->countBirth($model->tanggal_lahir)." Tahun"),
					'hp',
					'alamat_domisili',
					
					),
				)); ?>

		</div>

		<div class="col-md-5">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
				'attributes'=>array(

					array('name'=>'jenjang','value'=>Pelamar::model()->jenjang($model->jenjang)),
					'nilai',
					'golongan_darah',
					'kewarganegaraan',
					// array('name'=>'status_domisili','value'=>Pelamar::model()->domisili($model->status_domisili)),
					// array('name'=>'status_menikah','value'=>Pelamar::model()->menikah($model->status_menikah)),
					// 'tanggal_menikah',
					'no_jamsostek',
					'no_sim',
					'no_npwp',
					'telephone_pribadi',
					'telephone_rumah',
					

					),
				)); ?>
		</div>
		
	</div>

	<BR>

		<div class="panel-group" id="accordion" role="tablist" >
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							<?php echo $this->pageTitle; ?> - Keluarga 
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">

						<!-- START: DATA KELUARGA -->
						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('keluarga/create', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Keluarga'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Keluarga</H4>

						<div class="table-responsive">
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
									array('name'=>'pekerjaan','value'=>'$data->pekerjaan'),
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
						</div>
						<!-- END: DATA KELUARGA -->


					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="2">
							<?php echo $this->pageTitle; ?> - Pendidikan Formal 
						</a>
					</h4>
				</div>
				<div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">


						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('pendidikan/formal', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pendidikan Formal'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Pendidikan Formal</H4>

						<div class="table-responsive">
							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'pendidikan-grid',
								'summaryText'=>'',
								'dataProvider'=>$dataFormal,
								'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
								'columns'=>array(

									'instansi',
									'tahun_mulai',
									'tahun_lulus',
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

						</div>


					</div>
				</div>
			</div>




			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="false" aria-controls="3">
							<?php echo $this->pageTitle; ?> - Pendidikan Informal 
						</a>
					</h4>
				</div>
				<div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">


						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('pendidikan/nonformal', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pendidikan Non Formal'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Pendidikan Non Formal</H4>

						<div class="table-responsive">
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
						</div>


					</div>
				</div>
			</div>



			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="4">
							<?php echo $this->pageTitle; ?> - Kemampuan Bahasa 
						</a>
					</h4>
				</div>
				<div id="4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">


						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('bahasa/create', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Kemampuan Bahasa'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Kemampuan Bahasa</H4>
						<div class="table-responsive">
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

						</div>


					</div>
				</div>
			</div>



			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="5">
							<?php echo $this->pageTitle; ?> - Riwayat Organisasi 
						</a>
					</h4>
				</div>
				<div id="5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">


						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('organisasi/create', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Organisasi'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Organisasi</H4>

						<div class="table-responsive">
							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'organisasi-grid',
								'summaryText'=>'',
								'dataProvider'=>$dataOrganisasi,
								'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
								'columns'=>array(

									'nama',
									'tempat',
									'jenis_kegiatan',
									'tahun',
									'jabatan',

									array(
										'class'=>'CButtonColumn',
										'header'=>'Action',
										'template'=>'{update}{delete}',
										'buttons'=>array(
											'update'=>
											array(
												'url'=>'Yii::app()->createUrl("organisasi/update", array("id"=>$data->id_organisasi))',
												),
											'delete'=>
											array(
												'url'=>'Yii::app()->createUrl("organisasi/delete", array("id"=>$data->id_organisasi))',
												),
											),
										),

									),
								)); ?>	
						</div>



					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#6" aria-expanded="false" aria-controls="6">
							<?php echo $this->pageTitle; ?> - Riwayat Pekerjaan
						</a>
					</h4>
				</div>
				<div id="6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">



						<H4><?php echo CHtml::link('<i class="ti-plus"></i>', 
							array('pekerjaan/create', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Riwayat Pekerjaan'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Pekerjaan</H4>

						<div class="table-responsive">
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
						</div>


					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" style="padding: 15px;">
					<h4 class="panel-title">
						<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#7" aria-expanded="false" aria-controls="7">
							<?php echo $this->pageTitle; ?> - Keahlian 
						</a>
					</h4>
				</div>
				<div id="7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">


						<H4><?php echo CHtml::link('<i class="ti-plus"></i> Edit Keahlian', 
							array('keahlian/update', 'id'=>$model->id_people,
								), array('class' => 'btn btn-success btn-sm pull-right', 'title'=>'Edit Keahlian'));
						?><i class="ti-clipboard pull-left"></i> &nbsp Keahlian</H4>
						<div class="col-lg-2">
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$dataKeahlian,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(

									array('name'=>'word','value'=>Keahlian::model()->check($dataKeahlian->word)),
									array('name'=>'excel','value'=>Keahlian::model()->check($dataKeahlian->excel)),

									),
								)); ?>
						</div>
						<div class="col-lg-2">
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$dataKeahlian,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(

									array('name'=>'powerpoint','value'=>Keahlian::model()->check($dataKeahlian->powerpoint)),
									array('name'=>'sql','value'=>Keahlian::model()->check($dataKeahlian->sql)),



									),
								)); ?>
						</div>
						<div class="col-lg-2">
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$dataKeahlian,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(

									array('name'=>'lan','value'=>Keahlian::model()->check($dataKeahlian->lan)),
									array('name'=>'wan','value'=>Keahlian::model()->check($dataKeahlian->wan)),

									),
								)); ?>
						</div>

						<div class="col-lg-2">
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$dataKeahlian,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(

									array('name'=>'bahasa_pascal','value'=>Keahlian::model()->check($dataKeahlian->bahasa_pascal)),
									array('name'=>'c','value'=>Keahlian::model()->check($dataKeahlian->c)),

									),
								)); ?>
						</div>

						<div class="col-lg-2">
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$dataKeahlian,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(

									array('name'=>'php','value'=>Keahlian::model()->check($dataKeahlian->php)),
									array('name'=>'java','value'=>Keahlian::model()->check($dataKeahlian->java)),

									),
								)); ?>
						</div>

					</div>
				</div>
			</div>

		</div>



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
