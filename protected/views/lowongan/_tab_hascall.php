<?php
$countApplicant  = FileLamaran::model()->countApplicant(3,$model->id_lowongan); 
if($countApplicant==0){ ?>

	<div class="alert alert-info">Belum ada Data Baru dengan status (Telah Dipanggil) yang masuk pada ID Lowongan #<?php echo $model->id_lowongan; ?></div>

	<?php }else{ ?>

		<!-- START: Notifikasi Download Report -->
		<div class="alert alert-success">
			<center><h2 class="text-white">Laporan Seleksi yang telah Dipanggil disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Telah Dipanggil.xls"/>Download Laporan</a></b></h2></center>
		</div>
		<!-- END: Notifikasi Download Report -->
		<!-- Sudah di Panggil -->
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'file-4-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataUnverify->findStatus(3,$model->id_lowongan),
			'filter'=>$dataUnverify,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

				array(
					'class'=>'CButtonColumn',
					'header'=>'Detail',
					'template'=>'{view}',
					'buttons'=>array(
						'view'=>
						array(
							'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
							'imageUrl'=>YII::app()->baseUrl.'images/detail.png',
							),
						),
					),


				'id',
				array('header'=>'Penilaian','value'=>'FileLamaran::model()->cekPenilaian($data->penilaian_id)'),
				'tanggal_upload',
				array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
				array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),


				array(
					'class'=>'CButtonColumn',
					'header'=>'Aksi',
					'template'=>'{Penilaian}{Tolak}',
					'buttons'=>array(
						'Penilaian'=>
						array(
							'url'=>'Yii::app()->createUrl("penilaiansaw/create", array("pelamar"=>$data->user_id, "lowongan"=>$data->lowongan_id, "lamaran"=>$data->id))',
							'visible'=>'$data->penilaian_id==0 AND YII::app()->user->record->level==1',
							'imageUrl'=>YII::app()->baseUrl.'images/penilaian.png',
							),
						'Tolak'=>
						array(
							'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
							'imageUrl'=>YII::app()->baseUrl.'images/tolak.png',
							),
						),
					),

				),
			)); ?>

			<?php } ?>