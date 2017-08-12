<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Pengumuman Test';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('<i class="fa fa-print"></i> Pengumuman Lulus',
		array('printlulus'),
		array('class' => 'btn btn-danger btn-flat'));
		?>

		<?php echo CHtml::link('<i class="fa fa-print"></i> Pengumuman Gagal',
			array('printgagal'),
			array('class' => 'btn btn-danger btn-flat'));
			?>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'test-grid',
		'dataProvider'=>$model->search(),
		// 'filter'=>$model,
		'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

			'tanggal',

			array('name'=>'lowongan_id','value'=>'Test::model()->jabatan($data->Lowongan->jabatan)'),
			array('name'=>'user_id','value'=>'$data->User->username'),

			'status1',
			'status2',
			'status3',

			array(
				'header'=>'Test 1',
				// 'visible'=>Yii::app()->user->getLevel()==1,
				'visible'=>$model->status1!="Lulus",
				'class' => 'CButtonColumn',
				'template' => '{update}',
				'class'=>'CButtonColumn',
				'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/seleksi1",array("id"=>$data->id_test,))'
				),	
			array(
				'header'=>'Test 2',
				// 'visible'=>Yii::app()->user->getLevel()==1,
				'visible'=>$model->status2!="Lulus",
				'class' => 'CButtonColumn',
				'template' => '{update}',
				'class'=>'CButtonColumn',
				'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/seleksi2",array("id"=>$data->id_test,))'
				),	
			array(
				'header'=>'Test 3',
				'visible'=>$model->status3!="Lulus",
				// 'visible'=>Yii::app()->user->getLevel()==1,
				'class' => 'CButtonColumn',
				'template' => '{update}',
				'class'=>'CButtonColumn',
				'updateButtonUrl' => 'Yii::app()->controller->createUrl("test/seleksi3",array("id"=>$data->id_test,))'
				),	

			array(
				'header'=>'Hapus',
				'visible'=>Yii::app()->user->getLevel()==1,
				'template' => '{delete}',
				'class'=>'CButtonColumn',

				),
			),
			)); ?>

		</section>