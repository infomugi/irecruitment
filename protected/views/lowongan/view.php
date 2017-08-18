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

if(!YII::app()->user->isGuest):
	if(YII::app()->user->getLevel()==1):

		?>


	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<?php echo $this->pageTitle; ?>
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
					<?php require_once('_detail_lowongan_admin.php'); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Lamaran <?php echo $this->pageTitle; ?>
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					<div>	
						<ul class="nav nav-tabs">
							<li class="active"><a href="#0" data-toggle="tab"><i class="ti ti-bar-chart"></i> Belum di Verifikasi</a></a></li>
							<li><a  href="#1" data-toggle="tab"><i class="ti ti-bar-chart"></i> Diverifikasi</a></a></li>
							<li><a href="#2" data-toggle="tab"><i class="ti ti-bar-chart"></i> Dipanggil</a></a></li>
							<li><a href="#4" data-toggle="tab"><i class="ti ti-bar-chart"></i> Rekomendasi Panggilan</a></a></li>
							<li><a href="#5" data-toggle="tab"><i class="ti ti-bar-chart"></i> Diterima</a></a></li>
							<li><a href="#6" data-toggle="tab"><i class="ti ti-bar-chart"></i> Ditolak (Tidak Lulus)</a></a></li>
						</ul>

						<div class="tab-content ">


							<div class="tab-pane active" id="0">
								<!-- Belum di Verifikasi -->
								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'file-0-grid',
									'summaryText'=>'',
									'dataProvider'=>$dataUnverify->findStatus(0,$model->id_lowongan),
									'filter'=>$dataUnverify,
									'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
									'columns'=>array(

										'id',
										'tanggal_upload',
										array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
										array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),


										array(
											'class'=>'CButtonColumn',
											'header'=>'Aksi',
											'template'=>'{verified}{reject}{view}',
											'buttons'=>array(
												'verified'=>
												array(
													'url'=>'Yii::app()->createUrl("filelamaran/verifikasi", array("id"=>$data->id))',
													'imageUrl'=>'images/verifikasi.png',
													'visible'=> '$data->status_lamaran == 0',
													),
												'reject'=>
												array(
													'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
													'imageUrl'=>'images/tolak.png',
													),
												'view'=>
												array(
													'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
													'imageUrl'=>'images/detail.png',
													),
												),
											),
										),
										)); ?>

									</div>

									<div class="tab-pane" id="1">
										<!-- Sudah di Verifikasi -->
										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'file-1-grid',
											'summaryText'=>'',
											'dataProvider'=>$dataUnverify->findStatus(1,$model->id_lowongan),
											'filter'=>$dataUnverify,
											'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
											'columns'=>array(

												'id',
												'tanggal_upload',
												array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
												array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

												array(
													'class'=>'CButtonColumn',
													'header'=>'Aksi',
													'template'=>'{pemanggilan}{rekomendasi}{tolak}{view}',
													'buttons'=>array(
														'pemanggilan'=>
														array(
															'url'=>'Yii::app()->createUrl("filelamaran/pemanggilan", array("id"=>$data->id))',
															'imageUrl'=>'images/panggil.png',
															),
														'rekomendasi'=>
														array(
															'url'=>'Yii::app()->createUrl("filelamaran/rekomendasi", array("id"=>$data->id))',
															'imageUrl'=>'images/rekomendasi.png',
															),
														'tolak'=>
														array(
															'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
															'imageUrl'=>'images/tolak.png',
															),
														'view'=>
														array(
															'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
															'imageUrl'=>'images/detail.png',
															),
														),
													),


												),
												)); ?>

											</div>

											<div class="tab-pane" id="2">
												<!-- Pemanggilan -->
												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'file-2-grid',
													'summaryText'=>'',
													'dataProvider'=>$dataUnverify->findStatus(2,$model->id_lowongan),
													'filter'=>$dataUnverify,
													'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
													'columns'=>array(

														'id',
														'tanggal_upload',
														array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
														array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

														array(
															'class'=>'CButtonColumn',
															'header'=>'Aksi',
															'template'=>'{sudahdipanggil}{rekomendasi}{reject}{view}',
															'buttons'=>array(
																'sudahdipanggil'=>
																array(
																	'url'=>'Yii::app()->createUrl("filelamaran/sudahdipanggil", array("id"=>$data->id))',
																	'imageUrl'=>'images/sudahdipanggil.png',
																	),
																'rekomendasi'=>
																array(
																	'url'=>'Yii::app()->createUrl("filelamaran/rekomendasi", array("id"=>$data->id))',
																	'imageUrl'=>'images/rekomendasi.png',
																	),
																'reject'=>
																array(
																	'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
																	'imageUrl'=>'images/tolak.png',
																	),
																'view'=>
																array(
																	'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
																	'imageUrl'=>'images/detail.png',
																	),
																),
															),


														),
														)); ?>

													</div>


													<div class="tab-pane" id="3">
														<!-- Sudah di Panggil -->
														<?php $this->widget('zii.widgets.grid.CGridView', array(
															'id'=>'file-3-grid',
															'summaryText'=>'',
															'dataProvider'=>$dataUnverify->findStatus(3,$model->id_lowongan),
															'filter'=>$dataUnverify,
															'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
															'columns'=>array(

																'id',
																'tanggal_upload',
																array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
																array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

																array(
																	'class'=>'CButtonColumn',
																	'header'=>'Aksi',
																	'template'=>'{penilaian}{reject}{view}',
																	'buttons'=>array(
																		'penilaian'=>
																		array(
																			'url'=>'Yii::app()->createUrl("penilaiansaw/create", array("pelamar"=>$data->user_id, "lowongan"=>$data->lowongan_id, "lamaran"=>$data->id))',
																			'imageUrl'=>'images/penilaian.png',
																			),
																		'reject'=>
																		array(
																			'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
																			'imageUrl'=>'images/tolak.png',
																			),
																		'view'=>
																		array(
																			'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
																			'imageUrl'=>'images/detail.png',
																			),
																		),
																	),


																),
																)); ?>

															</div>

															<div class="tab-pane" id="4">
																<!-- Rekomendasi Panggilan -->
																<?php $this->widget('zii.widgets.grid.CGridView', array(
																	'id'=>'file-4-grid',
																	'summaryText'=>'',
																	'dataProvider'=>$dataUnverify->findStatus(11,$model->id_lowongan),
																	'filter'=>$dataUnverify,
																	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																	'columns'=>array(

																		'id',
																		'tanggal_upload',
																		array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
																		array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),


																		array(
																			'class'=>'CButtonColumn',
																			'header'=>'Aksi',
																			'template'=>'{penilaian}{reject}{view}',
																			'buttons'=>array(
																				'penilaian'=>
																				array(
																					'url'=>'Yii::app()->createUrl("penilaiansaw/create", array("pelamar"=>$data->user_id, "lowongan"=>$data->lowongan_id, "lamaran"=>$data->id))',
																					'imageUrl'=>'images/penilaian.png',
																					),
																				'reject'=>
																				array(
																					'url'=>'Yii::app()->createUrl("filelamaran/tidaklulus", array("id"=>$data->id))',
																					'imageUrl'=>'images/tolak.png',
																					),
																				'view'=>
																				array(
																					'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
																					'imageUrl'=>'images/detail.png',
																					),
																				),
																			),

																		),
																		)); ?>

																	</div>


																	<div class="tab-pane" id="5">
																		<!-- Diterima -->
																		<?php $this->widget('zii.widgets.grid.CGridView', array(
																			'id'=>'file-5-grid',
																			'summaryText'=>'',
																			'dataProvider'=>$dataUnverify->findStatus(5,$model->id_lowongan),
																			'filter'=>$dataUnverify,
																			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																			'columns'=>array(

																				'id',
																				'tanggal_upload',
																				array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
																				array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

																				array(
																					'class'=>'CButtonColumn',
																					'header'=>'Aksi',
																					'template'=>'{view}',
																					'buttons'=>array(
																						'view'=>
																						array(
																							'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
																							'imageUrl'=>'images/detail.png',
																							),
																						),
																					),

																				),
																				)); ?>

																			</div>

																			<div class="tab-pane" id="6">
																				<!-- Ditolak -->
																				<?php $this->widget('zii.widgets.grid.CGridView', array(
																					'id'=>'file-6-grid',
																					'summaryText'=>'',
																					'dataProvider'=>$dataUnverify->findStatus(9,$model->id_lowongan),
																					'filter'=>$dataUnverify,
																					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																					'columns'=>array(

																						'id',
																						'tanggal_upload',
																						array('name'=>'pelamar_id','value'=>'$data->Pelamar->nama'),
																						array('name'=>'status_lamaran','value'=>'FileLamaran::model()->status($data->status_lamaran)'),

																						array(
																							'class'=>'CButtonColumn',
																							'header'=>'Aksi',
																							'template'=>'{view}',
																							'buttons'=>array(
																								'view'=>
																								array(
																									'url'=>'Yii::app()->createUrl("filelamaran/view", array("id"=>$data->id))',
																									'imageUrl'=>'images/detail.png',
																									),
																								),
																							),

																						),
																						)); ?>

																					</div>



																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="panel panel-default">
																	<div class="panel-heading" role="tab" id="headingThree">
																		<h4 class="panel-title">
																			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																				Penilaian <?php echo $this->pageTitle; ?>
																			</a>
																		</h4>
																	</div>
																	<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
																		<div class="panel-body">


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
																						'value'=>'PenilaianSaw::model()->cek($data->id_penilaian_saw,$data->lamaran_id)',
																						),

																					),
																				)); 

																				?>




																			</div>
																		</div>
																	</div>
																</div>

																<?php 
																endif;
																endif;
																?>

																<?php
																if(YII::app()->user->isGuest){ 
																	require_once('_detail_lowongan.php'); 
																}else{
																	if(YII::app()->user->getLevel()==2):
																		require_once('_detail_lowongan.php'); 
																	endif;
																}

																?>






																<STYLE>
																	th{width:200px;}
																</STYLE>

