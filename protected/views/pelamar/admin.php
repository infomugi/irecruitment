<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Pelamar', 'url'=>array('create')),
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Pelamar';
?>


<!-- START: Notifikasi Download Report -->
<div class="alert alert-success">
	<center><h2 class="text-white">Laporan Pencari Kerja Kab. Bandung disimpan ke Excel, <b class="label label-warning"><a href="<?php echo YII::app()->baseUrl; ?>/Report - Pencari Kerja (<?php echo date('d-m-Y'); ?>).xls"/>Download Laporan</a></b></h2></center>
</div>
<!-- END: Notifikasi Download Report -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pelamar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		'nama',
		'jenis_kelamin',
		array('header'=>'Umur','value'=>'Pelamar::model()->countBirth($data->tanggal_lahir)'),
		'hp',
		array('name'=>'jenjang','value'=>'Pelamar::model()->jenjang($data->jenjang)'),
		'alamat_domisili',

		array(
			'header'=>'Detail',
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'htmlOptions'=>array('width'=>'100px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>

<?php
$this->widget('EExcelWriter', array(
	'dataProvider'=>$model->search(),
	'title'        => 'EExcelWriter',
	'stream'       => FALSE,
	'fileName'     => 'Report - Pencari Kerja ('.date('d-m-Y').').xls',
	'columns'      => array(

		'nama',
		'jenis_kelamin',
		array('header'=>'Umur','value'=>'Pelamar::model()->countBirth($data->tanggal_lahir)'),
		'hp',
		array('name'=>'jenjang','value'=>'Pelamar::model()->jenjang($data->jenjang)'),
		'alamat_domisili',

		),
	));
	?>


