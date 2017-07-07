<?php
/* @var $this KotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kotas',
	);

	$this->pageTitle='Daftar Kota';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Kota',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
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

		</section>