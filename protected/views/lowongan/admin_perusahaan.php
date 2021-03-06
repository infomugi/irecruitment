<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongan'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Lowongan';
?>
<?php if(Yii::app()->user->getLevel()==1){ ?>

	<div class="col-md-4">

		<?php echo CHtml::link('Tambah',
			array('create'),
			array('class' => 'btn btn-danger btn-flat'));
		?>
		<?php echo CHtml::link('Daftar',
			array('list'),
			array('class' => 'btn btn-danger btn-flat'));
		?>
	</div>

	<div class="col-md-8">
		<?php 
		echo CHtml::beginForm(CHtml::normalizeUrl(array('lowongan/search')), 'get')
		. CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan ID Job Order'))
		. CHtml::endForm();
		?>
	</div>

	<?php }else{ ?>

		<?php echo CHtml::link('Tambah',
			array('add'),
			array('class' => 'btn btn-danger btn-flat'));
		?>
		
		<?php } ?>


		<HR>
			
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'lowongan-grid',
				'dataProvider'=>$model->searchCompany(YII::app()->user->id),
			// 'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

				// 'tanggal',

					array(
						'name'=>'perusahaan_id',
						'value'=>'Lowongan::model()->perusahaan($data->perusahaan_id)',
						),

					'lokasi',

					'tanggal_kebutuhan',

					array(
						'name'=>'jabatan',
						'value'=>'$data->Jabatan->nama',
						),

					array(
						'name'=>'bagian',
						'value'=>'$data->Bagian->nama',
						),

					array(
						'name'=>'tipe',
						'value'=>'Lowongan::model()->tipe($data->tipe)',
						),

					'jumlah_orang',

					array(
						'header'=>'Total Pelamar',
						'value'=>'Lowongan::model()->countApply($data->id_lowongan)',
						),		


				// array(
				// 	'name'=>'status',
				// 	'value'=>'Lowongan::model()->status($data->status)',
				// 	),					


					array(
						'class'=>'CButtonColumn',
						'header'=>'Detail',
						'template'=>'{view}{update}',
						'buttons'=>array(
							'view'=>
							array(
								'url'=>'Yii::app()->createUrl("lowongan/view", array("id"=>$data->id_lowongan))',
							// 'imageUrl'=>YII::app()->baseUrl.'images/detail.png',
								),
							),
						),
					
					
					),
					)); ?>

