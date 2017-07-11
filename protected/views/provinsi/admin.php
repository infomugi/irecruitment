<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Provinsi', 'url'=>array('create')),
	array('label'=>'Daftar Provinsi', 'url'=>array('index')),
	array('label'=>'Kelola Provinsi', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Provinsi';
?>

<section class="col-xs-12">

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'provinsi-grid',
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
			'name',

			),
			)); ?>

		</section>