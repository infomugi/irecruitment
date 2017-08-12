<?php
/* @var $this CripsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Crips',
	);

	$this->pageTitle='Daftar Crips';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Crips',
 array('create'),
 array('class' => 'default-button'));
 ?>
		<?php echo CHtml::link('Kelola Crips',
 array('admin'),
 array('class' => 'default-button'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>