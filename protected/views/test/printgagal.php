<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Cetak Laporan Pengumuman Test';
?>
	<h4>Laporan Hasil Seleksi (Gagal)</h4>
	<HR>
	<?php
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'test-grid',
		'dataProvider'=>$dataProvider,
		// 'filter'=>$model,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

			array('header'=>'Tanggal','value'=>'$data->tanggal'),

			array('header'=>'Lowongan','value'=>'Test::model()->jabatan($data->Lowongan->jabatan)'),
			array('header'=>'Pelamar','value'=>'$data->User->username'),

			array('header'=>'Test Ke-1','value'=>'$data->status1'),
			array('header'=>'Berita Acara Ke-1','value'=>'$data->berita_acara1'),
			array('header'=>'Test Ke-2','value'=>'$data->status2'),
			array('header'=>'Berita Acara Ke-2','value'=>'$data->berita_acara2'),
			array('header'=>'Test Ke-3','value'=>'$data->status3'),
			array('header'=>'Berita Acara Ke-3','value'=>'$data->berita_acara3'),

			),
			)); ?>
			<HR>
			Dicetak Pada <?php echo date('d-m-Y h:i:s'); ?>

