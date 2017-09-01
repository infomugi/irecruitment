<?php
$this->widget('EExcelWriter', array(
	'dataProvider' => $dataNilai,
	'title'        => 'EExcelWriter',
	'stream'       => FALSE,
	'fileName'     => 'Report Penilaian.xls',
	'columns'      => array(

		array('header'=>'Nama Lengkap','value'=>'Pelamar::model()->getIdentity($data->pelamar_id)->nama'),
		array('header'=>'HP','value'=>'Pelamar::model()->getIdentity($data->pelamar_id)->hp'),
		array('header'=>'Email','value'=>'$data->Pelamar->email'),
		array('name'=>'c1','value'=>'$data->Character->nilai'),
		array('name'=>'c2','value'=>'$data->Capacity->nilai'),
		array('name'=>'c3','value'=>'$data->Capital->nilai'),
		array('name'=>'c4','value'=>'$data->Collateral->nilai'),
		array('name'=>'c5','value'=>'$data->Condition->nilai'),
		array('name'=>'c6','value'=>'$data->Cashflow->nilai'),
		array('name'=>'c7','value'=>'$data->Culture->nilai'),

		array('name'=>'c1','value'=>'PenilaianSaw::model()->check($data->Character->kriteria_id,$data->Character->nilai,$data->c1,"c1",$data->lowongan_id)*PenilaianSaw::model()->bobot("C1")'),
		array('name'=>'c2','value'=>'PenilaianSaw::model()->check($data->Capacity->kriteria_id,$data->Capacity->nilai,$data->c2,"c2",$data->lowongan_id)*PenilaianSaw::model()->bobot("C2")'),
		array('name'=>'c3','value'=>'PenilaianSaw::model()->check($data->Capital->kriteria_id,$data->Capital->nilai,$data->c3,"c3",$data->lowongan_id)*PenilaianSaw::model()->bobot("C3")'),
		array('name'=>'c4','value'=>'PenilaianSaw::model()->check($data->Collateral->kriteria_id,$data->Collateral->nilai,$data->c4,"c4",$data->lowongan_id)*PenilaianSaw::model()->bobot("C4")'),
		array('name'=>'c5','value'=>'PenilaianSaw::model()->check($data->Condition->kriteria_id,$data->Condition->nilai,$data->c5,"c5",$data->lowongan_id)*PenilaianSaw::model()->bobot("C5")'),
		array('name'=>'c6','value'=>'PenilaianSaw::model()->check($data->Cashflow->kriteria_id,$data->Cashflow->nilai,$data->c6,"c6",$data->lowongan_id)*PenilaianSaw::model()->bobot("C6")'),
		array('name'=>'c7','value'=>'PenilaianSaw::model()->check($data->Culture->kriteria_id,$data->Culture->nilai,$data->c7,"c7",$data->lowongan_id)*PenilaianSaw::model()->bobot("C7")'),

		array('header'=>'Hasil','value'=>'
			PenilaianSaw::model()->result(
			PenilaianSaw::model()->check($data->Character->kriteria_id,$data->Character->nilai,$data->c1,"c1",$data->lowongan_id)*PenilaianSaw::model()->bobot("C1") +
			PenilaianSaw::model()->check($data->Capacity->kriteria_id,$data->Capacity->nilai,$data->c2,"c2",$data->lowongan_id)*PenilaianSaw::model()->bobot("C2") +
			PenilaianSaw::model()->check($data->Capital->kriteria_id,$data->Capital->nilai,$data->c3,"c3",$data->lowongan_id)*PenilaianSaw::model()->bobot("C3") +
			PenilaianSaw::model()->check($data->Collateral->kriteria_id,$data->Collateral->nilai,$data->c4,"c4",$data->lowongan_id)*PenilaianSaw::model()->bobot("C4") +
			PenilaianSaw::model()->check($data->Condition->kriteria_id,$data->Condition->nilai,$data->c5,"c5",$data->lowongan_id)*PenilaianSaw::model()->bobot("C5") +
			PenilaianSaw::model()->check($data->Cashflow->kriteria_id,$data->Cashflow->nilai,$data->c6,"c6",$data->lowongan_id)*PenilaianSaw::model()->bobot("C6") +
			PenilaianSaw::model()->check($data->Culture->kriteria_id,$data->Culture->nilai,$data->c7,"c7",$data->lowongan_id)*PenilaianSaw::model()->bobot("C7")
			, $data->id_penilaian_saw
			)
			'),	


		),
	));

	?>

	<div class="alert alert-primary">
		<center><h2 class="text-white">Laporan Seleksi Untuk ID Job Order #<?php echo $model->id_lowongan; ?> telah disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report Penilaian.xls"/>Download Laporan</a></b></h2></center>
	</div>
