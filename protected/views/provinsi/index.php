<?php
/* @var $this ProvinsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provinsis',
	);

	$this->pageTitle='Daftar Provinsi';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Provinsi',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Provinsi',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>