<?php
$countApplicant  = FileLamaran::model()->countApplicant(2,$model->id_lowongan); 
if($countApplicant==0){ ?>

	<div class="alert alert-info">Belum ada Data Baru dengan status (Pemanggilan) yang masuk pada ID Job Order #<?php echo $model->id_lowongan; ?></div>

	<?php }else{ ?>

		<!-- START: Notifikasi Download Report -->
		<div class="alert alert-info">
			<center><h2 class="text-white">Laporan Seleksi yang Dipanggil disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Dipanggil.xls"/>Download Laporan</a></b></h2></center>
		</div>
		<!-- END: Notifikasi Download Report -->
		<!-- Pemanggilan -->
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'file-2-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataUnverify->findStatus(2,$model->id_lowongan),
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
							'imageUrl'=>'images/detail.png',
							),
						),
					),


				'id',
				'tanggal_upload',
				array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
				array('header'=>'HP','value'=>'$data->Pelamar->hp'),
				array('header'=>'Telp. Rumah','value'=>'$data->Pelamar->telephone_rumah'),
				array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

				array(
					'class'=>'CButtonColumn',
					'header'=>'Aksi',
					'template'=>'{Sudah di Panggil}{Tolak}',
					'buttons'=>array(
						'Sudah di Panggil'=>
						array(
							'url'=>'Yii::app()->createUrl("filelamaran/sudahdipanggil", array("id"=>$data->id))',
							'imageUrl'=>'images/sudahdipanggil.png',
							),
																// 'Rekomendasi'=>
																// array(
																// 	'url'=>'Yii::app()->createUrl("filelamaran/rekomendasi", array("id"=>$data->id))',
																// 	'imageUrl'=>'images/rekomendasi.png',
																// 	),
						'Tolak'=>
						array(
							'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
							'imageUrl'=>'images/tolak.png',
							),
																// 'Print'=>
																// array(
																// 	'url'=>'Yii::app()->createUrl("filelamaran/print", array("id"=>$data->id))',
																// 	'imageUrl'=>'images/print.png',
																// 	),

						),
					),


				),
			)); ?>

			<?php } ?>