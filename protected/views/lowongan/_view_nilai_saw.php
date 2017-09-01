<?php
echo CHtml::link('Pembobotan Kriteria',
	array('kriteria/admin'),
	array('class' => 'btn btn-success pull-right btn-flat','title'=>'Pembobotan Kriteria'));

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

																			// 'nilai',
		array('name'=>'pelamar_id','value'=>'$data->Pelamar->username'),


		array(
			'class'=>'CButtonColumn',
			'header'=>'Profil',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("pelamar/view", array("id"=>Pelamar::model()->applicant($data->pelamar_id)))',
					'imageUrl'=>'images/detail.png',
					),
				),
			),

		array(
			'header' => 'Aksi',
			'type' => 'raw',
			'value'=>'PenilaianSaw::model()->cek($data->id_penilaian_saw,$data->lamaran_id)',
			),

		),
	)); 


	?>

