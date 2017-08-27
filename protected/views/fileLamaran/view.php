<?php
/* @var $this FileLamaranController */
/* @var $model FileLamaran */
$dataBagian=Bagian::model()->findByPk($model->Lowongan->bagian);
$dataJabatan=Jabatan::model()->findByPk($model->Lowongan->jabatan);
$dataProvider=new CActiveDataProvider('Test',array('criteria'=>array('condition'=>'lamaran_id='.$model->id)));

$this->breadcrumbs=array(
	'File Lamarans'=>array('index'),
	$model->id,
	);

if(YII::app()->user->getLevel()==2){
	$this->pageTitle='Detail File Lamaran';
}else{
	$this->pageTitle='Verifikasi File Lamaran';
}


$update = "Update " . Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($dataDokumen->tanggal, 'yyyy-MM-dd'),'medium',null);
?>



<div class="alert <?php echo FileLamaran::model()->statusLabel($model->status_lamaran); ?>">Status Lamaran: <?php echo FileLamaran::model()->status($model->status_lamaran); ?></div>


<div>	
	<ul class="nav nav-tabs">
		<li class="active"><a href="#1" data-toggle="tab"><i class="ti ti-agenda"></i> Lamaran</a></a>
		</li>
		<li><a  href="#2" data-toggle="tab"><i class="ti ti-user"></i> Profil</a></a></li>
		<li><a href="#3" data-toggle="tab"><i class="ti ti-receipt"></i> Dokumen</a></a>
		</li>	
		<li><a href="#4" data-toggle="tab"><i class="ti ti-bar-chart"></i> Seleksi</a></a>
		</li>
	</ul>

	<div class="tab-content ">


		<div class="tab-pane active" id="1">

			<div class="row">
				<div class="col-md-4">

					<H4><i class="ti-clipboard pull-left"></i> Foto</H4>
					<center>
						<img width="280px" title="Foto" src="<?php echo Yii::app()->baseUrl. "/lamaran/foto/" .User::model()->avatar($model->user_id); ?>" class="img-responsive">
					</center>

				</div>

				<div class="col-md-8">


					<!-- START: DATA PRIBADI -->
					<H4><i class="ti-clipboard pull-left"></i> Detail Lamaran</H4>
					<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'htmlOptions'=>array("class"=>"table"),
						'attributes'=>array(

							'tanggal_upload',
							array('label'=>'Bagian','value'=>$dataBagian->nama),
							array('label'=>'Jabatan','value'=>$dataJabatan->nama),

							),
							)); ?>

							<?php if($model->verifikasi_id!=0): ?>

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'tanggal_verifikasi',
										'keterangan',
										),
										)); ?>	

									<?php endif; ?>


									<?php if(YII::app()->user->getLevel()==1): ?>
										<?php if($model->keterangan==""): ?>
											<div class="form-normal form-horizontal clearfix">
												<div class="col-md-9"> 

													<?php $form=$this->beginWidget('CActiveForm', array(
														'id'=>'people-form',
														'enableAjaxValidation'=>false,
														'enableClientValidation'=>true,
														'clientOptions'=>array('validateOnSubmit'=>true),
														'htmlOptions' => array('enctype' => 'multipart/form-data'),
														)); ?>

														<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


														<div class="form-group">

															<div class="col-sm-4 control-label">
																<?php echo $form->labelEx($model,'keterangan'); ?>
															</div>   

															<div class="col-sm-8">
																<?php echo $form->error($model,'keterangan'); ?>
																<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
															</div>

														</div>   	


														<div class="form-group">
															<div class="col-md-12">  
															</br></br>
															<?php echo CHtml::submitButton($model->isNewRecord ? 'Unggah' : 'Kirim', array('class' => 'btn btn-default btn-flat pull-right')); ?>
														</div>
													</div>

													<?php $this->endWidget(); ?>

												</div>
											</div><!-- form -->		


										<?php endif; ?>
									<?php endif; ?>

								</div>
							</div>
						</div>
						<!-- END: DATA PRIBADI -->



						<div class="tab-pane" id="2">


							<div class="row">
								<H4><i class="ti-clipboard pull-left"></i> Profil Pelamar</H4>
								<div class="col-md-6">

									<?php
									$data=Pelamar::model()->findByAttributes(array('id_user'=>$model->user_id));
									$this->widget('zii.widgets.CDetailView', array(
										'data'=>$data,
										'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
										'attributes'=>array(
											'nama',
											'tempat_lahir',
											'tanggal_lahir',
											'agama',
											'jenis_kelamin',
											'golongan_darah',
											'kewarganegaraan',
											array('label'=>'Umur','value'=>Pelamar::model()->countBirth($data->tanggal_lahir)." Tahun"),
											'hp',
											),
											)); ?>

										</div>

										<div class="col-md-6">

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$data,
												'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
												'attributes'=>array(

													'alamat_domisili',
													array('name'=>'status_domisili','value'=>Pelamar::model()->domisili($data->status_domisili)),
													array('name'=>'status_menikah','value'=>Pelamar::model()->menikah($data->status_menikah)),
													'tanggal_menikah',
													'no_jamsostek',
													'no_sim',
													'no_npwp',
													'telephone_pribadi',
													'telephone_rumah',
													),
													)); ?>
												</div>


												<?php echo require_once('detail_pelamar.php'); ?>

											</div>



										</div>

										<div class="tab-pane" id="3">

											<!-- START: DOKUMEN -->
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




											<table class="table">
												<tr>
													<td><b>Jenis</b></td>
													<td><b>Upload</b></td>
												</tr>
												<tr>
													<td><?php echo $dataDokumen->cv; ?></td>
													<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadCV">Lihat CV</a></td>
													
												</tr>
												<tr>
													<td><?php echo $dataDokumen->ktp; ?></td>
													<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadKTP">Lihat KTP</a></td>
												</tr>

												<tr>
													<td><?php echo $dataDokumen->ijazah; ?></td>
													<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadIjazah">LIHAT Ijazah</a></td>

												</tr>

												<tr>
													<td><?php echo $dataDokumen->transkrip; ?></td>
													<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadTranskrip">Lihat Transkrip</a></td>

												</tr>

												<tr>
													<td><?php echo $dataDokumen->skck; ?></td>
													<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadSkck">Lihat SKCK</a></td>

												</tr>

												<tr>
													<td><?php echo $dataDokumen->sertifikat; ?>/td>
														<td><a href="#" data-toggle="modal" class="btn btn-info" data-target="#loadSertifikat">Lihat Sertifikat</a></td>

													</tr>

												</table>


												<!-- END: DOKUMEN -->

											</div>


											<div class="tab-pane" id="4">
												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'test-grid',
													'dataProvider'=>$dataProvider,
													'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
													'columns'=>array(

														array(
															'header'=>'Test 1',
															'visible'=>Yii::app()->user->getLevel()==1,
															'class' => 'CButtonColumn',
															'template' => '{update}',
															'class'=>'CButtonColumn',
															'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/update1",array("id"=>$data->id_test,))'
															),		

														'status1',
														'berita_acara1',

														),
														)); ?>		

												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'test-grid',
													'dataProvider'=>$dataProvider,
													'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
													'columns'=>array(


														array(
															'header'=>'Test 2',
															'visible'=>Yii::app()->user->getLevel()==1,
															'class' => 'CButtonColumn',
															'template' => '{update}',
															'class'=>'CButtonColumn',
															'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/update2",array("id"=>$data->id_test,))'
															),		

														'status2',
														'berita_acara2',



														),
														)); ?>	

												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'test-grid',
													'dataProvider'=>$dataProvider,
													'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
													'columns'=>array(



														array(
															'header'=>'Test 3',
															'visible'=>Yii::app()->user->getLevel()==1,
															'class' => 'CButtonColumn',
															'template' => '{update}',
															'class'=>'CButtonColumn',
															'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/update3",array("id"=>$data->id_test,))'
															),		


														'status3',
														'berita_acara3',

														),
														)); ?>		
													</div>

												</div>
											</div>



											<?php if(YII::app()->user->getLevel()==2): ?>
												<?php if($model->status_lamaran==0): ?>

													<?php echo CHtml::link('<i class="fa fa-close"></i> Batalkan', 
														array('dibatalkan', 'id'=>$model->id,
															), array('class' => 'btn btn-danger pull-right btn-flat', 'title'=>'Batalkan Lamaran'));
															?>

														<?php endif; ?>
													<?php endif; ?>



													<?php if($model->status_lamaran!=0): ?>
														<?php if(YII::app()->user->getLevel()==1): ?>
															<?php if($model->penilaian_id==0): ?>
																<?php 
																echo CHtml::link('<i class="fa fa-tasks"></i> Nilai', 
																	array('penilaiansaw/create', 'pelamar'=>$model->user_id, 'lowongan'=>$model->lowongan_id, 'lamaran'=>$model->id), array('class' => 'btn btn-info btn-flat', 'title'=>'Buat Penilaian'));
																	?>
																<?php endif; ?>

																<?php echo CHtml::link('<i class="fa fa-phone"></i> Panggil', 
																	array('panggil', 'id'=>$model->id,
																		), array('class' => 'btn btn-warning btn-flat', 'title'=>'Panggil Pelamar'));
																		?>

																		<?php echo CHtml::link('<i class="fa fa-phone"></i> Sudah di Panggil', 
																			array('sudahdipanggil', 'id'=>$model->id,
																				), array('class' => 'btn btn-success btn-flat', 'title'=>'Sudah di Panggil ?'));
																				?>


																			<?php endif; ?>
																		<?php endif; ?>																		


																		<STYLE>
																			th{width:150px;}
																		</STYLE>


