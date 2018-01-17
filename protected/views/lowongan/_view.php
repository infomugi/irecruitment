<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
?>

<div class="sorting_content">
	<!-- <div class="tab-image hidden-xs"><img src="<?php echo YII::app()->theme->baseUrl; ?>/frontend/img/icon.jpg" alt="" class="img-responsive"></div> -->
	<div class="overflow">
		<div class="text-shorting">
			<h1 class="col-md-10 col-sm-10"><?php echo CHtml::link(CHtml::encode($data->Jabatan->nama . " - " . $data->Bagian->nama), array('view', 'id'=>$data->id_lowongan)); ?><p><?php echo $data->Perusahaan->nama; ?></p> </h1>
			<div class="work-time text-center col-md-2"><?php echo CHtml::encode(Lowongan::model()->deadline($data->tanggal_kebutuhan)); ?></div>
		</div>
		<div class="bottom_text">
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Dipublikasikan: <i class="fa fa-clock-o"></i></strong> <?php echo CHtml::encode($data->tanggal); ?></span>
			</div>
			<div class="contact_details col-md-2 col-sm-2">
				<span><strong>Max Umur: <i class="fa fa-calendar"></i></strong> <?php echo CHtml::encode($data->umur); ?> Tahun</span>
			</div>
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Tipe: </strong> <?php echo Lowongan::model()->tipe($data->tipe); ?></span>
			</div>			
			<div class="contact_details col-md-4 col-sm-4">
				<span><strong><i class="fa fa-user"></i></strong> <?php echo CHtml::encode(Lowongan::model()->gender($data->jeniskelamin)); ?></span>
			</div>

			<p class="col-md-12"><i class="fa fa-map-marker"></i> <?php echo CHtml::encode($data->lokasi); ?></p>
		</div>
	</div>
</div>

