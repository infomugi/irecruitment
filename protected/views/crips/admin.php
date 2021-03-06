<?php
/* @var $this CripsController */
/* @var $model Crips */

$this->breadcrumbs=array(
	'Crips'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Crips';
?>
<?php if(YII::app()->user->getLevel()==1): ?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah',
			array('create'),
			array('class' => 'btn btn-danger btn-flat','title'=>'Add Sub Kriteria'));
			?>

		</span>
	<?php endif; ?>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'crips-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

			array('name'=>'kriteria_id','value'=>'$data->Kriteria->nama'),
			'keterangan',
			'nilai',

			array(
				'header'=>'Action',
				'template'=>'{update}',
				'class'=>'CButtonColumn',
				'htmlOptions'=>array('width'=>'100px', 
					'style' => 'text-align: center;'),
				),
			),
			)); ?>

