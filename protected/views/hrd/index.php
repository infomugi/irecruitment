<?php
/* @var $this PelamarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelamars',
	);

$this->pageTitle='Daftar Pelamar';
?>

<?php echo CHtml::link('Kelola Pelamar',
	array('admin'),
	array('class' => 'btn btn-success btn-flat'));
	?>


	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

