<?php
/* @var $this KotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kotas',
	);

$this->pageTitle='Daftar Kota';
?>


<?php echo CHtml::link('Kelola Kota',
	array('admin'),
	array('class' => 'btn btn-success btn-flat'));
	?>

	<HR>

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>
