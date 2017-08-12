<?php
/* @var $this LowonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lowongans',
	);

$this->pageTitle='Job Order';
?>
<?php if(Yii::app()->user->getLevel()==1): ?>
	
	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'btn btn-danger pull-right btn-flat'));
		?>
		<BR>
			<BR>
				<HR>
				<?php endif; ?>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view_list',
					)); ?>

