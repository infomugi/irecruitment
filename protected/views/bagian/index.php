<?php
/* @var $this BagianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bagians',
	);

$this->pageTitle='Daftar Bagian';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Bagian',
		array('create'),
		array('class' => 'btn btn-primary btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Bagian',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>