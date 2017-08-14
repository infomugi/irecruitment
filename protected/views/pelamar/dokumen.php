<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_people,
	);

$this->menu=array(
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
	);
$this->pageTitle='Data Diri - '.ucwords($model->nama);

$update = "Update " . Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($dataDokumen->tanggal, 'yyyy-MM-dd'),'medium',null);
?>


<div class="row">
	<div class="col-md-12">
		<H4><i class="ti-clipboard pull-left"></i> Dokumen Lamaran - <?php echo $update; ?></H4>

		<table class="table">
			<tr>
				<td><b>Jenis</b></td>
				<td><b>Upload</b></td>
			</tr>
			<tr>
				<td><a href="#" data-toggle="modal" data-target="#loadCV"><?php echo $dataDokumen->cv; ?></a></td>
				<td>
					<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload CV', 
						array('dokumen/uploadcv', 'id'=>$model->id_people,
							), array('class' => 'btn btn-success btn-sm', 'title'=>'CV'));
							?>
						</td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#loadKTP"><?php echo $dataDokumen->ktp; ?></a></td>
						<td>
							<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload KTP', 
								array('dokumen/uploadktp', 'id'=>$model->id_people,
									), array('class' => 'btn btn-success btn-sm', 'title'=>'KTP'));
									?>

								</td>
							</tr>

							<tr>
								<td><?php echo $dataDokumen->ijazah; ?></td>
								<td>
									<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload Ijazah', 
										array('dokumen/uploadijazah', 'id'=>$model->id_people,
											), array('class' => 'btn btn-success btn-sm', 'title'=>'Ijazah'));
											?>
										</td>
									</tr>

									<tr>
										<td><?php echo $dataDokumen->transkrip; ?></td>
										<td>
											<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload Transkrip', 
												array('dokumen/uploadtranskrip', 'id'=>$model->id_people,
													), array('class' => 'btn btn-success btn-sm', 'title'=>'Transkrip'));
													?>
												</td>
											</tr>

											<tr>
												<td><?php echo $dataDokumen->skck; ?></td>
												<td>
													<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload SKCK', 
														array('dokumen/uploadskck', 'id'=>$model->id_people,
															), array('class' => 'btn btn-success btn-sm', 'title'=>'SKCK'));
															?>	
														</td>
													</tr>

													<tr>
														<td><?php echo $dataDokumen->sertifikat; ?></td>
														<td>

															<?php echo CHtml::link('<i class="ti-id-badge"></i> Sertifikat', 
																array('dokumen/uploadsertifikat', 'id'=>$model->id_people,
																	), array('class' => 'btn btn-success btn-sm', 'title'=>'Sertifikat'));
																	?>		
																</td>
															</tr>

														</table>
														<div class="alert text-right">
															* Dokumen dalam bentuk PDF. 
														</div>
													</div>
												</div>


												<!-- CV -->
												<div id="loadCV" class="modal fade" role="dialog1">
													<div class="modal-dialog">
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h5 class="modal-title">CV - @<?php echo YII::app()->user->name; ?></h5>
															</div>
															<div class="modal-body">
																<center>
																	<img src="<?php echo Yii::app()->baseUrl. "/lamaran/cv/" .$dataDokumen->cv; ?>" class="img-responsive">
																</center>
															</div>
															<div class="modal-footer">
															</div>
														</div>
													</div>


													<!-- KTP -->
													<div id="loadKTP" class="modal fade" role="dialog2">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h5 class="modal-title">KTP - @<?php echo YII::app()->user->name; ?></h5>
																</div>
																<div class="modal-body">
																	<center>
																		<img src="<?php echo Yii::app()->baseUrl. "/lamaran/ktp/" .$dataDokumen->ktp; ?>" class="img-responsive">
																	</center>
																</div>
																<div class="modal-footer">
																</div>
															</div>
														</div>