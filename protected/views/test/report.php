<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Laporan Pengumuman Test';
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

			<?php 
			$dataProvider=new CActiveDataProvider('Test',array('criteria'=>array('condition'=>'status3="Lulus"')));	
			$this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'test-grid',
				'dataProvider'=>$dataProvider,
		// 'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped',
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
					'berita_acara1',
					'status2',
					'berita_acara2',
					'status3',
					'berita_acara3',

					),
					)); ?>

				</section>