<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lowongans',
	);

$this->pageTitle='Laporan Lamaran';
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_report',
	)); ?>

