<?php
/* @var $this PekerjaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pekerjaans',
	);

$this->pageTitle='Daftar Pekerjaan';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pekerjaan',
		array('create'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Pekerjaan',
			array('admin'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>