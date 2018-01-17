<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Daftar Lowongan';
$this->breadcrumbs=array(
	'Lowongans',
	);

$this->menu=array(
	array('label'=>'Tambah Lowongan', 'url'=>array('create')),
	array('label'=>'Kelola Lowongan', 'url'=>array('admin')),
	);
	?>


	<div class="page_listing">

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</div>
