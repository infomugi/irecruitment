<?php
$countApplicant  = FileLamaran::model()->countApplicant(5,$model->id_lowongan); 
if($countApplicant==0){ ?>

	<div class="alert alert-info">Belum ada Data Baru dengan status (Diterima) yang masuk pada ID Job Order #<?php echo $model->id_lowongan; ?></div>

	<?php }else{ ?>

		<!-- START: Notifikasi Download Report -->
		<div class="alert alert-primary">
			<center><h2 class="text-white">Laporan Seleksi yang telah Diterima disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Telah Diterima.xls"/>Download Laporan</a></b></h2></center>
		</div>
		<!-- END: Notifikasi Download Report -->
		<!-- Diterima -->
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'file-5-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataUnverify->findStatus(5,$model->id_lowongan),
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
				array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

				),
			)); ?>

			<?php } ?>