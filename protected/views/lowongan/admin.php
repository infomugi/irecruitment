<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Lowongan';
?>


<?php echo CHtml::link('Tambah Lowongan',
	array('create'),
	array('class' => 'btn btn-primary btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Lowongan',
		array('index'),
		array('class' => 'btn btn-primary btn-flat'));
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

