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

<div class="comment-body">
	<div class="user-img"> <img src="<?php echo YII::app()->baseUrl; ?>/lamaran/foto/<?php echo $data->Pelamar->image; ?>" alt="user" class="img-circle"></div>
	<div class="mail-contnet">
		<h5>Pavan kumar</h5> 
		<span class="mail-desc">
			<?php echo CHtml::link(CHtml::encode("Lamaran : ".$dataBagian->nama." - ".$dataJabatan->nama), array('filelamaran/view', 'id'=>$data->id)); ?>
		</span> 
		<span class="label label-rouded label-<?php echo $alert; ?>">
			<?php echo $data->status_lamaran; ?>
		</span>

		<?php 
		echo CHtml::link('<i class="ti-check text-success"></i>', 
			array('diterima', 'id'=>$data->id,
				), array('class' => 'action', 'title'=>'Terima Lamaran'));
				?>

				<?php 
				echo CHtml::link('<i class="ti-close text-danger"></i>', 
					array('ditolak', 'id'=>$data->id,
						), array('class' => 'action', 'title'=>'Tolak Lamaran'));
						?>


						<span class="time pull-right"><?php echo CHtml::encode($data->tanggal_upload); ?></span>
					</div>
				</div>
