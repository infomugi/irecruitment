<?php
/* @var $this FileLamaranController */
/* @var $data FileLamaran */
$dataBagian=Bagian::model()->findByPk($data->Lowongan->bagian);
$dataJabatan=Jabatan::model()->findByPk($data->Lowongan->jabatan);
?>

<div class="box">
	<div class="text-box">
		<h2><a href="#"><?php echo CHtml::link(CHtml::encode("File Lamaran : ".$dataBagian->nama." - ".$dataJabatan->nama), array('filelamaran/view', 'id'=>$data->id)); ?></a></h2>
		<h4>
			<i class="fa fa-calendar"></i> Tanggal Upload : 
			<?php echo CHtml::encode($data->tanggal_upload); ?>
			-
			<span class="label label-warning"> <?php echo $data->status_lamaran; ?></span>
		</h4>
	</div>
</div>


