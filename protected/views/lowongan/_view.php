<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
?>


<div class="sorting_content">
	<div class="overflow">
		<div class="text-shorting">
			<h1 class="col-md-6 col-sm-7"><?php echo CHtml::link(CHtml::encode($data->Jabatan->nama . " - " . $data->Bagian->nama), array('view', 'id'=>$data->id_lowongan)); ?><p><i class="fa fa-map-marker"></i> <?php echo CHtml::encode($data->lokasi); ?></p> </h1>
			<div class="<?php echo CHtml::encode(Lowongan::model()->deadline($data->tanggal_kebutuhan)); ?> <?php echo CHtml::encode(Lowongan::model()->statusLabel($data->status)); ?> col-md-2"><?php echo CHtml::encode(Lowongan::model()->status($data->status)); ?></div>
		</div>
		<div class="bottom_text">
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Posting: <i class="fa fa-calendar"></i></strong> <?php echo CHtml::encode($data->tanggal); ?></span>
			</div>
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Berlaku: <i class="fa fa-calendar"></i></strong> <?php echo CHtml::encode($data->tanggal_kebutuhan); ?></span>
			</div>		
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Jenis Kelamin:</strong> <?php echo CHtml::encode(Lowongan::model()->gender($data->jeniskelamin)); ?></span>
			</div>				
			<div class="contact_details col-md-3 col-sm-3">
				<span><strong>Status Lowongan:</strong> <?php echo CHtml::encode(Lowongan::model()->deadline($data->tanggal_kebutuhan)); ?></span>
			</div>
			<p class="col-md-12"><?php echo CHtml::encode($data->deskripsi_kebutuhan); ?></p>

			<?php 
			
			echo CHtml::link('Detail',
				array('lowongan/view','id'=>$data->id_lowongan),
				array('class' => 'btn btn-success pull-right btn-flat','title'=>'Detail Lowongan'));
			

				?>

			</div>
		</div>
	</div>

	<style type="text/css">
		.Telah{display: none;}
	</style>

