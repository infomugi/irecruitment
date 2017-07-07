<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Kota', 'url'=>array('create')),
	array('label'=>'Daftar Kota', 'url'=>array('index')),
	array('label'=>'Kelola Kota', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Kota';
?>

<section class="col-xs-12">

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'kota-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

						// 'id',
			array('name'=>'province_id','value'=>'$data->Provinsi->name'),
			'name',
			
			),
			)); ?>

		</section>