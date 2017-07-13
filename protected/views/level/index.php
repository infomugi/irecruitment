<?php
/* @var $this LevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Levels',
	);

$this->pageTitle='Daftar Level';
?>

<?php echo CHtml::link('Tambah Level',
	array('create'),
	array('class' => 'btn btn-danger btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Level',
		array('admin'),
		array('class' => 'btn btn-danger btn-flat'));
		?>


		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

