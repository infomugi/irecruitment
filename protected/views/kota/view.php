<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	$model->name,
	);

$this->menu=array(
	array('label'=>'Daftar Kota', 'url'=>array('index')),
	array('label'=>'Kelola Kota', 'url'=>array('admin')),
	);
$this->pageTitle='Detail Kota';
?>

<?php echo CHtml::link('List',
	array('index'),
	array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Kota'));
	?>
	<?php echo CHtml::link('Kelola',
		array('admin'),
		array('class' => 'btn btn-success btn-flat','title'=>'Kelola Kota'));
		?>


		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'id',
					'province_id',
					'name',
					),
					)); ?>

					

			<STYLE>
				th{width:150px;}
			</STYLE>

