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
			$new=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'lowongan_id='.$data->id_lowongan.'','order'=>'id DESC')));
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

