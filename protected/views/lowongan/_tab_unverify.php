<?php
$countApplicant  = FileLamaran::model()->countApplicant(0,$model->id_lowongan); 
if($countApplicant==0){ ?>

	<div class="alert alert-info">Belum ada Data Baru dengan status (Belum di Verifikasi) yang masuk pada ID Lowongan #<?php echo $model->id_lowongan; ?></div>

	<?php }else{ ?>

		<!-- START: Notifikasi Download Report -->
		<div class="alert alert-danger">
			<center><h2 class="text-white">Laporan Seleksi yang Belum di Verifikasi disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Belum di Verifikasi.xls"/>Download Laporan</a></b></h2></center>
		</div>
		<!-- END: Notifikasi Download Report -->


		<!-- Belum di Verifikasi -->
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'file-0-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataUnverify->findStatus(0,$model->id_lowongan),
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
				'tanggal_upload',
				array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
				array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),


				array(
					'class'=>'CButtonColumn',
					'header'=>'Aksi',
					'template'=>'{Verifikasi}{Tolak}',
					'buttons'=>array(
						'Verifikasi'=>
						array(
							'url'=>'Yii::app()->createUrl("filelamaran/verifikasi", array("id"=>$data->id))',
							'imageUrl'=>YII::app()->baseUrl.'images/verifikasi.png',
							'visible'=> '$data->status_lamaran == 0',
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