<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Job Order';
?>


<?php echo CHtml::link('Tambah Job Order',
	array('create'),
	array('class' => 'btn btn-info btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Job Order',
		array('index'),
		array('class' => 'btn btn-info btn-flat'));
		?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'lowongan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				'tanggal',
				'tanggal_kebutuhan',
				array(
					'name'=>'jabatan',
					'value'=>'$data->Jabatan->nama',
					),

				array(
					'name'=>'bagian',
					'value'=>'$data->Bagian->nama',
					),

				// array(
				// 	'name'=>'tipe',
				// 	'value'=>'Lowongan::model()->tipe($data->tipe)',
				// 	),

				array(
					'name'=>'status',
					'value'=>'Lowongan::model()->status($data->status)',
					),		
				
				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>

