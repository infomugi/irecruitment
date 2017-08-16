<?php
/* @var $this FileLamaranController */
/* @var $data FileLamaran */
$dataBagian=Bagian::model()->findByPk($data->Lowongan->bagian);
$dataJabatan=Jabatan::model()->findByPk($data->Lowongan->jabatan);
?>

<div class="comment-body">
	<div class="mail-contnet">
		<h5><?php //echo $data->Pelamar->nama; ?></h5> 
		<span class="mail-desc">
			<?php echo CHtml::link(CHtml::encode("Lamaran : ".$dataBagian->nama." - ".$dataJabatan->nama), array('filelamaran/view', 'id'=>$data->id)); ?>
		</span> 
		<span class="label label-rouded <?php echo FileLamaran::model()->statusLabel($data->status_lamaran); ?>">
			<?php echo FileLamaran::model()->status($data->status_lamaran); ?>
		</span>

		<span class="time pull-right"><?php echo CHtml::encode($data->tanggal_upload); ?></span>
	</div>
</div>
