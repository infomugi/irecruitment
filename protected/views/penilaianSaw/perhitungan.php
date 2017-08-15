<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Analisis Penilaian Pelamar dengan Metode SAW';
?>

<h4>Hasil Analisa (Metode SAW)</h4>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-saw-grid',
	'dataProvider'=>$dataProvider,
	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		array('name'=>'c1','value'=>'$data->Character->keterangan'),
		array('name'=>'c2','value'=>'$data->Capacity->keterangan'),
		array('name'=>'c3','value'=>'$data->Capital->keterangan'),
		array('name'=>'c4','value'=>'$data->Collateral->keterangan'),
		array('name'=>'c5','value'=>'$data->Condition->keterangan'),
		array('name'=>'c6','value'=>'$data->Cashflow->keterangan'),
		array('name'=>'c7','value'=>'$data->Culture->keterangan'),

		array(
			'header'=>'Edit',
			'template'=>'{view}',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'5px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>


		<h4>Hasil Penilaian</h4>
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'penilaian-saw-grid',
			'dataProvider'=>$dataProvider,
			'summaryText'=>'',
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				array('name'=>'c1','value'=>'$data->Character->nilai'),
				array('name'=>'c2','value'=>'$data->Capacity->nilai'),
				array('name'=>'c3','value'=>'$data->Capital->nilai'),
				array('name'=>'c4','value'=>'$data->Collateral->nilai'),
				array('name'=>'c5','value'=>'$data->Condition->nilai'),
				array('name'=>'c6','value'=>'$data->Cashflow->nilai'),
				array('name'=>'c7','value'=>'$data->Culture->nilai'),

				),
				)); ?>


				<h4>Normalisasi</h4>

				<div class="col-xs-12">
					<div class="alert alert-info">Apabila Kriteria Bobot = Benefit Maka, Nilai / Nilai Maksimum.</div>
				</div>
				<div class="col-xs-12">
					<div class="alert alert-success">Apabila Kriteria Bobot = Cost Maka, Nilai Minimum / Nilai.</div>
				</div>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'penilaian-saw-grid',
					'summaryText'=>'',
					'dataProvider'=>$dataProvider,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						array('name'=>'c1','value'=>'PenilaianSaw::model()->check($data->Character->kriteria_id,$data->Character->nilai,$data->c1,"c1")'),
						array('name'=>'c2','value'=>'PenilaianSaw::model()->check($data->Capacity->kriteria_id,$data->Character->nilai,$data->c2,"c2")'),
						array('name'=>'c3','value'=>'PenilaianSaw::model()->check($data->Capital->kriteria_id,$data->Character->nilai,$data->c3,"c3")'),
						array('name'=>'c4','value'=>'PenilaianSaw::model()->check($data->Collateral->kriteria_id,$data->Character->nilai,$data->c4,"c4")'),
						array('name'=>'c5','value'=>'PenilaianSaw::model()->check($data->Condition->kriteria_id,$data->Character->nilai,$data->c5,"c5")'),
						array('name'=>'c6','value'=>'PenilaianSaw::model()->check($data->Cashflow->kriteria_id,$data->Character->nilai,$data->c6,"c6")'),
						array('name'=>'c7','value'=>'PenilaianSaw::model()->check($data->Culture->kriteria_id,$data->Character->nilai,$data->c7,"c7")'),

						),
						)); ?>

						<h4>Bobot</h4>
						<table class="table table-bordered table-striped dataTable table-hover">
							<tr>
								<td>Kriteria</td>
								<td>C1</td>
								<td>C2</td>
								<td>C3</td>
								<td>C4</td>
								<td>C5</td>
								<td>C6</td>
								<td>C7</td>
							</tr>
							<tr>
								<td>Bobot</td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C1"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C2"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C3"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C4"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C5"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C6"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->bobot("C7"); ?></td>
							</tr>	
							<tr>
								<td>Atribut</td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C1"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C2"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C3"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C4"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C5"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C6"); ?></td>
								<td><?PHP echo PenilaianSaw::model()->atribut("C7"); ?></td>
							</tr>														
						</table>

						<h4>Hasil</h4>
						<div class="col-md-12">
							<div class="alert alert-info">Bobot di bagi hasil perhitungan normalisasi, contoh: 25 : 0.5 = 12.5</div>
						</div>
						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'penilaian-saw-grid',
							'summaryText'=>'',
							'dataProvider'=>$dataProvider,
							'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
							'columns'=>array(

								array(
									'header'=>'No',
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


								),
								)); ?>			

								<h4>Rekomendasi Pelamar</h4>

								
								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'penilaian-saw-grid',
									'summaryText'=>'',
									'dataProvider'=>$dataNilai,
									'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
									'columns'=>array(

										array(
											'header'=>'Ranking',
											'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
											'htmlOptions'=>array('width'=>'10px', 
												'style' => 'text-align: center;')),

										'nilai',
										array('name'=>'pelamar_id','value'=>'$data->Pelamar->username'),
										array(
											'header' => 'Aksi',
											'type' => 'raw',
											// 'value' => function($data) {
											// 	return CHtml::link("Verifikasi", array('/penilaiansaw/verifikasi', 'id' => $data->id_penilaian_saw));
											// }
											'value'=>'PenilaianSaw::model()->cek($data->id_penilaian_saw)',
											),

										),
										)); ?>	