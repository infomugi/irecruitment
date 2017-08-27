<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lowongans',
	);

$this->pageTitle='Laporan Lamaran';
?>


<div class="panel-group" id="accordion" role="tablist" >

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view_report',
		)); ?>

	</div>