<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	$model->name,
	);

$this->menu=array(
	array('label'=>'Daftar Provinsi', 'url'=>array('index')),
	array('label'=>'Kelola Provinsi', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Provinsi';
?>



<?php echo CHtml::link('List',
	array('index'),
	array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Provinsi'));
	?>
	<?php echo CHtml::link('Kelola',
		array('admin'),
		array('class' => 'btn btn-success btn-flat','title'=>'Kelola Provinsi'));
		?>
		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'id',
					'name',
					),
					)); ?>



			<STYLE>
				th{width:150px;}
			</STYLE>

