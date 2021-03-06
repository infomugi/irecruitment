	<div class="row">
		<div class="col-md-12">


			<div class="col-md-12 table-responsive">
				<H4><i class="ti-clipboard pull-left"></i> Keluarga</H4>
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'keluarga-grid',
					'summaryText'=>'',
					'dataProvider'=>$dataFamily,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array('name'=>'hubungan_keluarga','value'=>'Keluarga::model()->relationship_family($data->hubungan_keluarga)'),
						'nama',
						array('name'=>'jenis_kelamin','value'=>'Keluarga::model()->gender($data->jenis_kelamin)'),
						'tempat_lahir',
						'tanggal_lahir',
						array('name'=>'pendidikan_terakhir','value'=>'Keluarga::model()->school($data->pendidikan_terakhir)'),
						array('name'=>'pekerjaan','value'=>'$data->pekerjaan'),
						'nama_perusahaan',
						// 'keterangan',

						array(
							'class'=>'CButtonColumn',
							'header'=>'Action',
							'template'=>'{update}{delete}',
							'buttons'=>array(
								'update'=>
								array(
									'url'=>'Yii::app()->createUrl("keluarga/update", array("id"=>$data->id_keluarga))',
									),
								'delete'=>
								array(
									'url'=>'Yii::app()->createUrl("keluarga/delete", array("id"=>$data->id_keluarga))',
									),
								),
							),

						),
						)); ?>
					</div>


					<div class="col-md-12 table-responsive">
						<H4><i class="ti-clipboard pull-left"></i> Pendidikan Formal</H4>
						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'pendidikan-grid',
							'summaryText'=>'',
							'dataProvider'=>$dataFormal,
							'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
							'columns'=>array(

								'instansi',
								'mulai',
								'selesai',
								'tahun_lulus',
								'nilai',
								'jurusan',
								'nilai',

								array(
									'class'=>'CButtonColumn',
									'header'=>'Action',
									'template'=>'{update}{delete}',
									'buttons'=>array(
										'update'=>
										array(
											'url'=>'Yii::app()->createUrl("pendidikan/updateformal", array("id"=>$data->id_pendidikan))',
											),
										'delete'=>
										array(
											'url'=>'Yii::app()->createUrl("pendidikan/delete", array("id"=>$data->id_pendidikan))',
											),
										),
									),

								),
								)); ?>	
							</div>


							<div class="col-md-12 table-responsive">
								<H4><i class="ti-clipboard pull-left"></i> Pendidikan Non Formal</H4>
								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'non-pendidikan-grid',
									'summaryText'=>'',
									'dataProvider'=>$dataNonFormal,
									'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
									'columns'=>array(

										array('name'=>'macam','value'=>'Pendidikan::model()->macam($data->macam)'),
										'mulai',
										'selesai',
										'instansi',
										'no_dokumen',

										array(
											'class'=>'CButtonColumn',
											'header'=>'Action',
											'template'=>'{update}{delete}',
											'buttons'=>array(
												'update'=>
												array(
													'url'=>'Yii::app()->createUrl("pendidikan/updatenonformal", array("id"=>$data->id_pendidikan))',
													),
												'delete'=>
												array(
													'url'=>'Yii::app()->createUrl("pendidikan/delete", array("id"=>$data->id_pendidikan))',
													),
												),
											),

										),
										)); ?>	
									</div>

									<div class="col-md-12 table-responsive">
										<H4><i class="ti-clipboard pull-left"></i> Kemampuan Bahasa</H4>
										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'non-pendidikan-grid',
											'summaryText'=>'',
											'dataProvider'=>$dataBahasa,
											'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
											'columns'=>array(

												'nama',
												array('name'=>'berbicara','value'=>'Bahasa::model()->grade($data->berbicara)'),
												array('name'=>'menulis','value'=>'Bahasa::model()->grade($data->menulis)'),
												array('name'=>'membaca','value'=>'Bahasa::model()->grade($data->membaca)'),
												array('name'=>'mengerti','value'=>'Bahasa::model()->grade($data->mengerti)'),

												array(
													'class'=>'CButtonColumn',
													'header'=>'Action',
													'template'=>'{update}{delete}',
													'buttons'=>array(
														'update'=>
														array(
															'url'=>'Yii::app()->createUrl("bahasa/update", array("id"=>$data->id_bahasa))',
															),
														'delete'=>
														array(
															'url'=>'Yii::app()->createUrl("bahasa/delete", array("id"=>$data->id_bahasa))',
															),
														),
													),

												),
												)); ?>	
											</div>

											<div class="col-md-12 table-responsive">
												<H4><i class="ti-clipboard pull-left"></i> Organisasi</H4>
												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'organisasi-grid',
													'summaryText'=>'',
													'dataProvider'=>$dataOrganisasi,
													'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
													'columns'=>array(

														'nama',
														'tempat',
														'jenis_kegiatan',
														'tahun',
														'jabatan',

														array(
															'class'=>'CButtonColumn',
															'header'=>'Action',
															'template'=>'{update}{delete}',
															'buttons'=>array(
																'update'=>
																array(
																	'url'=>'Yii::app()->createUrl("organisasi/update", array("id"=>$data->id_organisasi))',
																	),
																'delete'=>
																array(
																	'url'=>'Yii::app()->createUrl("organisasi/delete", array("id"=>$data->id_organisasi))',
																	),
																),
															),

														),
														)); ?>	
													</div>

													<div class="col-md-12 table-responsive">
														<H4><i class="ti-clipboard pull-left"></i> Pekerjaan</H4>
														<?php $this->widget('zii.widgets.grid.CGridView', array(
															'id'=>'pekerjaan-grid',
															'summaryText'=>'',
															'dataProvider'=>$dataJobs,
															'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
															'columns'=>array(

																'instansi',
																'tahun',
																'gaji',
																'bagian',

																array(
																	'class'=>'CButtonColumn',
																	'header'=>'Action',
																	'template'=>'{update}{delete}',
																	'buttons'=>array(
																		'update'=>
																		array(
																			'url'=>'Yii::app()->createUrl("pekerjaan/update", array("id"=>$data->id_pekerjaan))',
																			),
																		'delete'=>
																		array(
																			'url'=>'Yii::app()->createUrl("pekerjaan/delete", array("id"=>$data->id_pekerjaan))',
																			),
																		),
																	),

																),
																)); ?>

															</div>
															
														</div>
													</div>



													<H4><i class="ti-clipboard pull-left"></i> Keahlian</H4>
													<div class="col-lg-2">
														<?php $this->widget('zii.widgets.CDetailView', array(
															'data'=>$dataKeahlian,
															'htmlOptions'=>array("class"=>"table"),
															'attributes'=>array(

																array('name'=>'word','value'=>Keahlian::model()->check($dataKeahlian->word)),
																array('name'=>'excel','value'=>Keahlian::model()->check($dataKeahlian->excel)),

																),
																)); ?>
															</div>
															<div class="col-lg-2">
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$dataKeahlian,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(

																		array('name'=>'powerpoint','value'=>Keahlian::model()->check($dataKeahlian->powerpoint)),
																		array('name'=>'sql','value'=>Keahlian::model()->check($dataKeahlian->sql)),



																		),
																		)); ?>
																	</div>
																	<div class="col-lg-2">
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$dataKeahlian,
																			'htmlOptions'=>array("class"=>"table"),
																			'attributes'=>array(

																				array('name'=>'lan','value'=>Keahlian::model()->check($dataKeahlian->lan)),
																				array('name'=>'wan','value'=>Keahlian::model()->check($dataKeahlian->wan)),

																				),
																				)); ?>
																			</div>

																			<div class="col-lg-2">
																				<?php $this->widget('zii.widgets.CDetailView', array(
																					'data'=>$dataKeahlian,
																					'htmlOptions'=>array("class"=>"table"),
																					'attributes'=>array(

																						array('name'=>'bahasa_pascal','value'=>Keahlian::model()->check($dataKeahlian->bahasa_pascal)),
																						array('name'=>'c','value'=>Keahlian::model()->check($dataKeahlian->c)),

																						),
																						)); ?>
																					</div>

																					<div class="col-lg-2">
																						<?php $this->widget('zii.widgets.CDetailView', array(
																							'data'=>$dataKeahlian,
																							'htmlOptions'=>array("class"=>"table"),
																							'attributes'=>array(

																								array('name'=>'php','value'=>Keahlian::model()->check($dataKeahlian->php)),
																								array('name'=>'java','value'=>Keahlian::model()->check($dataKeahlian->java)),

																								),
																								)); ?>
																							</div>

