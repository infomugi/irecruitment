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

<div class="modal fade" id="loadCV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/cv/" .$dataDokumen->cv; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loadKTP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/ktp/" .$dataDokumen->ktp; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loadIjazah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/ijazah/" .$dataDokumen->ijazah; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loadTranskrip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/transkrip/" .$dataDokumen->transkrip; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="loadSkck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/skck/" .$dataDokumen->skck; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loadSertifikat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<img src="<?php echo Yii::app()->baseUrl. "/lamaran/sertifikat/" .$dataDokumen->sertifikat; ?>" class="img-responsive">
				</center>
			</div>
		</div>
	</div>
</div>

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
								<td><a href="#" data-toggle="modal" data-target="#loadIjazah"><?php echo $dataDokumen->ijazah; ?></a></td>
								<td>
									<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload Ijazah', 
										array('dokumen/uploadijazah', 'id'=>$model->id_people,
											), array('class' => 'btn btn-success btn-sm', 'title'=>'Ijazah'));
											?>
										</td>
									</tr>

									<tr>
										<td><a href="#" data-toggle="modal" data-target="#loadTranskrip"><?php echo $dataDokumen->transkrip; ?></a></td>
										<td>
											<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload Transkrip', 
												array('dokumen/uploadtranskrip', 'id'=>$model->id_people,
													), array('class' => 'btn btn-success btn-sm', 'title'=>'Transkrip'));
													?>
												</td>
											</tr>

											<tr>
												<td><a href="#" data-toggle="modal" data-target="#loadSkck"><?php echo $dataDokumen->skck; ?></a></td>
												<td>
													<?php echo CHtml::link('<i class="ti-id-badge"></i> Upload SKCK', 
														array('dokumen/uploadskck', 'id'=>$model->id_people,
															), array('class' => 'btn btn-success btn-sm', 'title'=>'SKCK'));
															?>	
														</td>
													</tr>

													<tr>
														<td><a href="#" data-toggle="modal" data-target="#loadSertifikat"><?php echo $dataDokumen->sertifikat; ?></a></td>
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

