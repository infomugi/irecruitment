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


<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-md'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('List Pelamar',
			array('index'),
			array('class' => 'btn btn-primary btn-flat'));
			?>

		</span>	

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
				'tempat_lahir',
				'tanggal_lahir',
				'agama',
				'jenis_kelamin',

				array(
					'header'=>'Action',
					'class'=>'CButtonColumn',
					'template'=>'{view}',
					'htmlOptions'=>array('width'=>'100px', 
						'style' => 'text-align: center;'),
					),
				),
				)); ?>

