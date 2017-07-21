<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Kelola',
	);
$this->pageTitle='Laporan Pengumuman Test';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak Laporan Semua',
		array('print'),
		array('class' => 'btn btn-info btn-flat'));
		?>

		<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak Laporan Lulus',
			array('printlulus'),
			array('class' => 'btn btn-info btn-flat'));
			?>			

			<?php echo CHtml::link('<i class="fa fa-print"></i> Cetak Laporan Gagal',
				array('printgagal'),
				array('class' => 'btn btn-info btn-flat'));
				?>		



				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'lowongan-grid',
					'dataProvider'=>$dataProvider,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'tanggal',
						array(
							'name'=>'jabatan',
							'value'=>'$data->Jabatan->nama',
							),

						array(
							'name'=>'bagian',
							'value'=>'$data->Bagian->nama',
							),

						array(
							'name'=>'tipe',
							'value'=>'Lowongan::model()->tipe($data->tipe)',
							),

						// array(
						// 	'header'=>'Diterima',
						// 	'value'=>'Yii::app()->db->createCommand("SELECT COUNT(id_test) FROM test WHERE status3=1 AND lowongan_id=".$data->id_lowongan." ")->queryScalar()',
						// 	),

						// array(
						// 	'header'=>'Ditolak',
						// 	'value'=>'Yii::app()->db->createCommand("SELECT COUNT(id_test) FROM test WHERE status1=0 AND lowongan_id=".$data->id_lowongan." ")->queryScalar()',
						// 	),

						array(   
							'header'=>'Detail',
							'type'=>'raw',
							'value'=>'CHtml::link("Lihat Hasil", array("/lowongan/detail&id=$data->id_lowongan/"))',
							),



						),
						)); ?>


					</section>