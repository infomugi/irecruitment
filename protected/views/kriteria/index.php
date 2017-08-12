<?php
/* @var $this KriteriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kriterias',
	);

	$this->pageTitle='Daftar Kriteria';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Kriteria',
 array('create'),
 array('class' => 'default-button'));
 ?>
		<?php echo CHtml::link('Kelola Kriteria',
 array('admin'),
 array('class' => 'default-button'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>