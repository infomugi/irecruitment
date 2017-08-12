<?php
/* @var $this PenilaianSawController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penilaian Saws',
	);

$this->pageTitle='Daftar Analisis';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Daftar Verifikasi',
		array('listverifikasi'),
		array('class' => 'default-button'));
		?>

	<?php echo CHtml::link('Daftar Diterima',
		array('listterima'),
		array('class' => 'default-button'));
		?>

		<?php echo CHtml::link('Daftar Pending',
			array('listpending'),
			array('class' => 'default-button'));
			?>

			<?php echo CHtml::link('Daftar Ditolak',
				array('listtolak'),
				array('class' => 'default-button'));
				?>

				<HR>

					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>

					</section>