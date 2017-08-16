<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan,
	);


$this->pageTitle="Lowongan ".$model->Jabatan->nama. " ". $model->Bagian->nama;;
?>

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

	if(!YII::app()->user->isGuest):
		if(YII::app()->user->getLevel()==1):

			echo "<h4>Daftar Pelamar</h4>";
		echo "<div class='col-md-12'><div class='comment-center'>";
		$this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view_pelamar',
			'summaryText'=>'',
			)); 
		echo "</div></div>";


		echo "<h4>Penilaian Hasil Seleksi</h4>";
		$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'penilaian-saw-grid',
			'summaryText'=>'',
			'dataProvider'=>$dataNilai,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'Rank',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				array('name'=>'c1','value'=>'PenilaianSaw::model()->check($data->Character->kriteria_id,$data->Character->nilai,$data->c1,"c1")*PenilaianSaw::model()->bobot("C1")'),
				array('name'=>'c2','value'=>'PenilaianSaw::model()->check($data->Capacity->kriteria_id,$data->Capacity->nilai,$data->c2,"c2")*PenilaianSaw::model()->bobot("C2")'),
				array('name'=>'c3','value'=>'PenilaianSaw::model()->check($data->Capital->kriteria_id,$data->Capital->nilai,$data->c3,"c3")*PenilaianSaw::model()->bobot("C3")'),
				array('name'=>'c4','value'=>'PenilaianSaw::model()->check($data->Collateral->kriteria_id,$data->Collateral->nilai,$data->c4,"c4")*PenilaianSaw::model()->bobot("C4")'),
				array('name'=>'c5','value'=>'PenilaianSaw::model()->check($data->Condition->kriteria_id,$data->Condition->nilai,$data->c5,"c5")*PenilaianSaw::model()->bobot("C5")'),
				array('name'=>'c6','value'=>'PenilaianSaw::model()->check($data->Cashflow->kriteria_id,$data->Cashflow->nilai,$data->c6,"c6")*PenilaianSaw::model()->bobot("C6")'),
				array('name'=>'c7','value'=>'PenilaianSaw::model()->check($data->Culture->kriteria_id,$data->Culture->nilai,$data->c7,"c7")*PenilaianSaw::model()->bobot("C7")'),

				array('header'=>'Hasil','value'=>'
					PenilaianSaw::model()->result(
					PenilaianSaw::model()->check($data->Character->kriteria_id,$data->Character->nilai,$data->c1,"c1")*PenilaianSaw::model()->bobot("C1") +
					PenilaianSaw::model()->check($data->Capacity->kriteria_id,$data->Capacity->nilai,$data->c2,"c2")*PenilaianSaw::model()->bobot("C2") +
					PenilaianSaw::model()->check($data->Capital->kriteria_id,$data->Capital->nilai,$data->c3,"c3")*PenilaianSaw::model()->bobot("C3") +
					PenilaianSaw::model()->check($data->Collateral->kriteria_id,$data->Collateral->nilai,$data->c4,"c4")*PenilaianSaw::model()->bobot("C4") +
					PenilaianSaw::model()->check($data->Condition->kriteria_id,$data->Condition->nilai,$data->c5,"c5")*PenilaianSaw::model()->bobot("C5") +
					PenilaianSaw::model()->check($data->Cashflow->kriteria_id,$data->Cashflow->nilai,$data->c6,"c6")*PenilaianSaw::model()->bobot("C6") +
					PenilaianSaw::model()->check($data->Culture->kriteria_id,$data->Culture->nilai,$data->c7,"c7")*PenilaianSaw::model()->bobot("C7")
					, $data->id_penilaian_saw
					)
					'),	

				// 'nilai',
				array('name'=>'pelamar_id','value'=>'$data->Pelamar->username'),

				array(
					'header' => 'Aksi',
					'type' => 'raw',
					'value'=>'PenilaianSaw::model()->cek($data->id_penilaian_saw)',
					),

				),
			)); 

		endif;
		endif;
		?>


		<STYLE>
			th{width:200px;}
		</STYLE>

