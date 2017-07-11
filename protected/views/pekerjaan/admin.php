<?php
/* @var $this PendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikans'=>array('index'),
	'Kelola',
	);

$this->menu=array(
	array('label'=>'Tambah Pendidikan', 'url'=>array('create')),
	array('label'=>'Daftar Pendidikan', 'url'=>array('index')),
	array('label'=>'Kelola Pendidikan', 'url'=>array('admin')),
	);

$this->pageTitle='Kelola Pendidikan';
?>


<?php echo CHtml::link('Tambah Pendidikan',
	array('create'),
	array('class' => 'btn btn-success btn-flat'));
	?>
	<?php echo CHtml::link('Daftar Pendidikan',
		array('index'),
		array('class' => 'btn btn-success btn-flat'));
		?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'pendidikan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
			'columns'=>array(

				array(
					'header'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
					'htmlOptions'=>array('width'=>'10px', 
						'style' => 'text-align: center;')),

				'instansi',
				'tahun',
				'gaji',
				'bagian',

				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>
				
