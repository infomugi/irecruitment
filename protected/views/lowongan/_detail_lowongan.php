	<?php 
	$lewat = CHtml::encode(Lowongan::model()->deadline($model->tanggal_kebutuhan));
	if($lewat!="Telah lewat"){

		$this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
				'tanggal',
				array(
					'name'=>'jabatan',
					'value'=>$model->Jabatan->nama,
					),

				array(
					'name'=>'bagian',
					'value'=>$model->Bagian->nama,
					),

				array(
					'name'=>'umur',
					'value'=>$model->umur,													
					),

				array(
					'name'=>'jeniskelamin',
					'value'=>Lowongan::model()->gender($model->jeniskelamin),													
					),					

				array(
					'name'=>'tipe',
					'value'=>Lowongan::model()->tipe($model->tipe),
					),

				array(
					'name'=>'status',
					'value'=>Lowongan::model()->status($model->status),
					),		

				array(
					'name'=>'jumlah_orang',
					'value'=>$model->jumlah_orang,
					),

				array(
					'name'=>'deskripsi_pekerjaan',
					'value'=>$model->deskripsi_pekerjaan,
					),

				array(
					'name'=>'deskripsi_kebutuhan',
					'value'=>$model->deskripsi_kebutuhan,
					),

				array(
					'name'=>'lokasi',
					'value'=>$model->lokasi,													
					),								

				))); 


	//Notifikasi Apabila Levelnya tidak Sama dengan = 1 (Admin)
		if(Yii::app()->user->getLevel()!=1):

			if(!YII::app()->user->isGuest){

				$profile=Pelamar::model()->findByAttributes(array('id_user'=>YII::app()->user->id));

				if($profile->jenis_kelamin==$model->jeniskelamin){

					$umur = Pelamar::model()->countBirth($profile->tanggal_lahir);

					if($model->umur>$umur){
						echo "<br>";

					//Apabila Pelamar sedang dalam Proses Melamar
						echo Lowongan::model()->cekLamaran($profile->lowongan_id,$model->id_lowongan,YII::app()->user->id);

					}else{

						echo "<div class='alert alert-warning'>Maaf, Maksimal umur lowongan ini ".$model->umur." Tahun - ( Umur Anda Sekarang ".$umur." Tahun )</div>";

					}

				}else{

					echo "<div class='alert alert-warning'>Lowongan Ini Diprioritaskan untuk ".Lowongan::model()->gender($model->jeniskelamin)."</div>";

					if($model->jeniskelamin=="LP"):
					//Apabila Pelamar sedang dalam Proses Melamar
						echo Lowongan::model()->cekLamaran($profile->lowongan_id,$model->id_lowongan,YII::app()->user->id);
					endif;

				}

			}else{

			// Cek: Status Lamaran
				if($model->status==1){
				//Notif: Lowongan Masih di Buka
					echo Lowongan::model()->notifikasiLamaran(3);
				}else{
				//Notif: Maaf, Lowongan Ini Sudah Ditutup.
					echo Lowongan::model()->notifikasiLamaran(1);
				}

			}
			endif;


		}else{

			if(YII::app()->user->isGuest):

			//Notif: Maaf, Lowongan Ini Sudah Tidak Tersedia
				echo Lowongan::model()->notifikasiLamaran(2);

			endif;

			if(YII::app()->user->getLevel()==2):

			//Notif: Maaf, Lowongan Ini Sudah Tidak Tersedia
				echo Lowongan::model()->notifikasiLamaran(2);

			endif;
		}

		?>