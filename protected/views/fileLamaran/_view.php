<?php
/* @var $this FileLamaranController */
/* @var $data FileLamaran */
$dataBagian=Bagian::model()->findByPk($data->Lowongan->bagian);
$dataJabatan=Jabatan::model()->findByPk($data->Lowongan->jabatan);
?>
<?php
if($data->status_lamaran=="Belum di Verifikasi"){
	$alert = "warning";
}else if($data->status_lamaran=="Diterima"){
	$alert = "info";
}else{
	$alert = "danger";
}
?>

<div class="sorting_content">
	<div class="tab-image"><img src="assets/images/candidates/candidate-1.png" alt="" class="img-responsive"></div>
	<div class="overflow">
		<div class="text-shorting">
			<h1><?php echo CHtml::link(CHtml::encode("Lamaran : ".$dataBagian->nama." - ".$dataJabatan->nama), array('view', 'id'=>$data->id)); ?></h1>
			<ul class="unstyled">
				<li><span class="label label-<?php echo $alert; ?>"> <?php echo $data->status_lamaran; ?></span></li>
				<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>
			</ul>
			<p></p>
		</div>
		<div class="bottom_text">
			<div class="contact_details col-md-4 col-sm-4 p-l">
				<span><strong>Lowongan:</strong> <?php echo $dataBagian->nama; ?></span>
			</div>
			<div class="contact_details col-md-8 col-sm-8 p-l">
				<span><strong>Jabatan:</strong>  <?php echo $dataJabatan->nama; ?></span>
			</div>
			<p></p>
			<p class="col-md-12 p-l"><i class="fa fa-calendar"></i> Tanggal Upload : 
				<span class="format-date"><?php echo CHtml::encode($data->tanggal_upload); ?></span>
				<?php if($data->tanggal_verifikasi!="0000-00-00 00:00:00"): ?>
					-
					<i class="fa fa-calendar"></i> Tanggal Verifikasi : 
					<span class="format-date"><?php echo CHtml::encode($data->tanggal_verifikasi); ?></span>
				<?php endif; ?></p>
			</div>
		</div>
	</div>

