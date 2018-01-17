<?php
/* @var $this BagianController */
/* @var $model Bagian */

$this->breadcrumbs=array(
	'Bagians'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Bagian';
?>


<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-danger btn-flat'));
	?>
	<?php echo CHtml::link('Daftar',
		array('index'),
		array('class' => 'btn btn-danger btn-flat'));
		?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'bagian-grid',
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
				'deskripsi',
				'status',
				
				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>

