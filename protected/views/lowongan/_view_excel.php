<!-- Report to Excel Unverify -->
<?php
$this->widget('EExcelWriter', array(
	'dataProvider' => $dataUnverify->findStatus(0,$model->id_lowongan),
	'title'        => 'EExcelWriter',
	'stream'       => FALSE,
	'fileName'     => 'Report - Belum di Verifikasi.xls',
	'columns'      => array(

		'id',
		'tanggal_upload',
		array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
		array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

		),
	));
	?>



	<!-- Report to Excel Verify -->
	<?php
	$this->widget('EExcelWriter', array(
		'dataProvider' => $dataUnverify->findStatus(1,$model->id_lowongan),
		'title'        => 'EExcelWriter',
		'stream'       => FALSE,
		'fileName'     => 'Report - Telah di Verifikasi.xls',
		'columns'      => array(

			'id',
			'tanggal_upload',
			array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
			array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

			),
		));
		?>


		<!-- Report to Excel Call -->
		<?php
		$this->widget('EExcelWriter', array(
			'dataProvider' => $dataUnverify->findStatus(2,$model->id_lowongan),
			'title'        => 'EExcelWriter',
			'stream'       => FALSE,
			'fileName'     => 'Report - Dipanggil.xls',
			'columns'      => array(

				'id',
				'tanggal_upload',
				array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
				array('header'=>'HP','value'=>'$data->Pelamar->hp'),
				array('header'=>'Telp. Rumah','value'=>'$data->Pelamar->telephone_rumah'),
				array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

				),
			));
			?>


			<!-- Report to Excel has Call -->
			<?php
			$this->widget('EExcelWriter', array(
				'dataProvider' => $dataUnverify->findStatus(3,$model->id_lowongan),
				'title'        => 'EExcelWriter',
				'stream'       => FALSE,
				'fileName'     => 'Report - Telah Dipanggil.xls',
				'columns'      => array(

					'id',
					'tanggal_upload',
					array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
					array('header'=>'HP','value'=>'$data->Pelamar->hp'),
					array('header'=>'Telp. Rumah','value'=>'$data->Pelamar->telephone_rumah'),
					array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

					),
				));
				?>



				<!-- Report to Excel has Success -->
				<?php
				$this->widget('EExcelWriter', array(
					'dataProvider' => $dataUnverify->findStatus(5,$model->id_lowongan),
					'title'        => 'EExcelWriter',
					'stream'       => FALSE,
					'fileName'     => 'Report - Telah Diterima.xls',
					'columns'      => array(

						'id',
						'tanggal_upload',
						array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
						array('header'=>'HP','value'=>'$data->Pelamar->hp'),
						array('header'=>'Telp. Rumah','value'=>'$data->Pelamar->telephone_rumah'),
						array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

						),
					));
					?>



					<!-- Report to Excel has Success -->
					<?php
					$this->widget('EExcelWriter', array(
						'dataProvider' => $dataUnverify->findStatus(9,$model->id_lowongan),
						'title'        => 'EExcelWriter',
						'stream'       => FALSE,
						'fileName'     => 'Report - Gagal Seleksi.xls',
						'columns'      => array(

							'id',
							'tanggal_upload',
							array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
							array('header'=>'HP','value'=>'$data->Pelamar->hp'),
							array('header'=>'Telp. Rumah','value'=>'$data->Pelamar->telephone_rumah'),
							array('header'=>'Status','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

							),
						));
						?>


						<!-- Report to Excel All -->
						<?php
						$new=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'lowongan_id='.$model->id_lowongan.'','order'=>'id DESC')));

						$this->widget('EExcelWriter', array(
							'dataProvider' => $new,
							'title'        => 'EExcelWriter',
							'stream'       => FALSE,
							'fileName'     => 'Report - Per Job Order.xls',
							'columns'      => array(

								'id',
								array(
									'name'=>'lowongan_id',
									'value'=>'Lowongan::model()->jobName($data->lowongan_id)',										
									),

								array(
									'name'=>'pelamar_id',
									'value'=>'$data->Pelamar->nama',													
									),

								array(
									'name'=>'status_lamaran',
									'value'=>'FileLamaran::model()->status($data->status_lamaran)',													
									),		

								'tanggal_upload',
								'tanggal_verifikasi',


								),
							));

							?>


