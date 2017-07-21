<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lowongans',
	);

$this->pageTitle='Daftar Lowongan';
?>
<?php if(Yii::app()->user->getLevel()==1): ?>
	
	<?php echo CHtml::link('Tambah Job Order',
		array('create'),
		array('class' => 'btn btn-info btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Job Order',
			array('admin'),
			array('class' => 'btn btn-info btn-flat'));
			?>

		<?php endif; ?>

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

			