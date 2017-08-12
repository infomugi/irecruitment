<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Penilaian SAW';
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-saw-grid',
	'dataProvider'=>$model->search(),
					// 'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),


		// array('name'=>'customer_id','value'=>'$data->Pelamar->nama'),
		array('name'=>'c1','value'=>'$data->Character->keterangan'),
		array('name'=>'c2','value'=>'$data->Capacity->keterangan'),
		array('name'=>'c3','value'=>'$data->Capital->keterangan'),
		array('name'=>'c4','value'=>'$data->Collateral->keterangan'),
		array('name'=>'c5','value'=>'$data->Condition->keterangan'),
		array('name'=>'c6','value'=>'$data->Cashflow->keterangan'),
		array('name'=>'c7','value'=>'$data->Culture->keterangan'),

		array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>

	</section>