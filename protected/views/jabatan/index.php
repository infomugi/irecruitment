<?php
/* @var $this JabatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabatans',
	);

$this->pageTitle='Daftar Jabatan';
?>


<?php echo CHtml::link('Tambah Jabatan',
	array('create'),
	array('class' => 'btn btn-primary btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Jabatan',
		array('admin'),
		array('class' => 'btn btn-primary btn-flat'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

