<?php
$countApplicant  = FileLamaran::model()->countApplicant(9,$model->id_lowongan); 
if($countApplicant==0){ ?>

	<div class="alert alert-info">Belum ada Data Baru dengan status (Ditolak) yang masuk pada ID Lowongan #<?php echo $model->id_lowongan; ?></div>

	<?php }else{ ?>


		<!-- START: Notifikasi Download Report -->
		<div class="alert alert-danger">
			<center><h2 class="text-white">Laporan Seleksi yang telah Gagal disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Gagal Seleksi.xls"/>Download Laporan</a></b></h2></center>
		</div>
		<!-- END: Notifikasi Download Report -->
		<!-- Ditolak -->
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'file-6-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataUnverify->findStatus(9,$model->id_lowongan),
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

				),
			)); ?>

			<?php } ?>