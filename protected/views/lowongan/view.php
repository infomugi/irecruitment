<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan,
	);

require_once('_view_excel.php');

$this->pageTitle="Lowongan ".$model->Jabatan->nama. " ". $model->Bagian->nama;;

?>
<?php
if(!YII::app()->user->isGuest):
	if(YII::app()->user->getLevel()!=2):
		?>
	<div class="panel-group" id="accordion" role="tablist" >
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title">
					<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<?php echo $this->pageTitle; ?>
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">


					<?php
					$countApplicant  = FileLamaran::model()->countApplicantAll($model->id_lowongan); 
					if($countApplicant==0){ ?>

						<div class="alert alert-info">Hi <?php echo YII::app()->user->name; ?>, Belum ada data Pelamar yang masuk pada ID Job Order #<?php echo $model->id_lowongan; ?></div>
						
						<?php }else{ ?>

							<!-- START: Notifikasi Download Report -->
							<div class="alert alert-danger">
								<center><h2 class="text-white">Laporan Pelamar Per Job Order telah disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Per Job Order.xls"/>Download Laporan</a></b></h2></center>
							</div>
							<!-- END: Notifikasi Download Report -->

							<?php } ?>



							<?php require_once('_detail_lowongan_admin.php'); ?>
							
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo" aria-multiselectable="true">
						<h4 class="panel-title">
							<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Lamaran <?php echo $this->pageTitle; ?>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse  collapse in" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<div>	
								<ul class="nav nav-tabs">
									<li class="active"><a href="#0" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Belum di Verifikasi</span></a></a></li>
									<li><a  href="#1" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Diverifikasi</span></a></a></li>
									<li><a href="#2" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Dipanggil</span></a></a></li>
									<li><a href="#3" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Sudah di Panggil</span></a></a></li>
									<li><a href="#5" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Diterima</span></a></a></li>
									<li><a href="#6" data-toggle="tab"><i class="ti ti-user"></i> <span class="hidden-xs">Ditolak (Tidak Lulus)</span></a></a></li>
								</ul>

								<div class="tab-content ">


									<div class="tab-pane active" id="0">

										<?php require_once('_tab_unverify.php'); ?>

									</div>

									<div class="tab-pane" id="1">

										<?php require_once('_tab_verify.php'); ?>
										
									</div>

									<div class="tab-pane" id="2">

										<?php require_once('_tab_call.php'); ?>

									</div>


									<div class="tab-pane" id="3">

										<?php require_once('_tab_hascall.php'); ?>
										
									</div>


									<div class="tab-pane" id="5">

										<?php require_once('_tab_accept.php'); ?>

									</div>

									<div class="tab-pane" id="6">
										
										<?php require_once('_tab_reject.php'); ?>

									</div>


								</div>
							</div>

						</div>
					</div>
				</div>
				<?php if(YII::app()->user->getLevel()==1): ?>
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
								$count  = PenilaianSaw::model()->countApplicant($model->id_lowongan); 
								if($count==0){
									?>
									<div class="alert alert-info">Hi <?php echo YII::app()->user->name; ?>, Belum ada Pelamar yang telah di Nilai pada ID Job Order #<?php echo $model->id_lowongan; ?></div>
									<?php
								}else{
									require_once('_view_nilai.php');
									require_once('_view_nilai_saw.php');
								}
								?>

							</div>
						</div>
					</div>
				<?php endif; ?>

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

