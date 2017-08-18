<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */

$this->breadcrumbs=array(
	'Kriterias'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Kriteria';
?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kriteria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),

		'kode',
		'nama',
		array('name'=>'atribut','value'=>'Kriteria::model()->bobot($data->atribut)'),
		'bobot',

		array(
			'header'=>'Edit',
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'htmlOptions'=>array('width'=>'100px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>
