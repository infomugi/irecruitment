<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
?>

<div class="panel panel-default">
	<div class="panel-heading" role="tab" id="headingOne">
		<h4 class="panel-title">
			<a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $data->id_lowongan; ?>" aria-expanded="false" aria-controls="<?php echo $data->id_lowongan; ?>">
				<?php echo CHtml::encode("Laporan Lamaran - ".$data->Jabatan->nama . " - " . $data->Bagian->nama); ?>
			</a>
		</h4>
	</div>
	<div id="<?php echo $data->id_lowongan; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		<div class="panel-body">

			<?php
			echo CHtml::beginForm(array('filelamaran/getperiodic'));
			?>
			<div class="row no-padding">
				<div class="col-lg-5">

					<?php
					echo CHtml::dropDownList('bulan', '', array(
						'01'=>'Januari',
						'02'=>'Februari',
						'03'=>'Maret',
						'04'=>'April',
						'05'=>'Mei',
						'06'=>'Juni',
						'07'=>'Juli',
						'08'=>'Agustus',
						'08'=>'September',
						'10'=>'Oktober',
						'11'=>'November',
						'12'=>'Desember',
						),
					array('empty'=>'-- Pilih Bulan --','class'=>'form-control'));
					?>
				</div>

				<div class="col-lg-5">
					<?php
					echo CHtml::dropDownList('tahun', '', FileLamaran::model()->getYear(),
						array('empty'=>'-- Pilih Tahun --','class'=>'form-control'));
						?>
					</div>

					<div class="col-lg-2">
						<?php
						echo CHtml::submitButton('Tampilkan',array('class'=>'btn btn-info'));
						echo CHtml::endForm();
						?>
					</div>
				</div>

				<HR>


					<?php
					$new = new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'lowongan_id='.$data->id_lowongan.'','order'=>'id DESC')));
					$this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'lowongan-grid',
						'dataProvider'=>$new,
						// 'filter'=>$model,
						'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
						'columns'=>array(

							'id',
							array(
								'name'=>'lowongan_id',
								'value'=>'Lowongan::model()->jobName($data->lowongan_id)',										
								),

							array(
								'name'=>'pelamar_id',
								'value'=>'$data->Pelamar->nama',													
								),

							array(
								'name'=>'status_lamaran',
								'value'=>'FileLamaran::model()->status($data->status_lamaran)',													
								),		

							'tanggal_upload',
							'tanggal_verifikasi',

							),
							)); ?>



						</div>
					</div>
				</div>

