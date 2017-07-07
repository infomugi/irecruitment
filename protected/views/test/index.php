<?php
/* @var $this TestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tests',
	);

	$this->pageTitle='Daftar Test';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Test',
 array('create'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Test',
 array('admin'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>