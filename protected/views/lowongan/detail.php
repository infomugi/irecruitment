<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan,
	);

$this->pageTitle='Lowongan - '.$model->Jabatan->nama . " - " .$model->Bagian->nama;
$dataDiterima=new CActiveDataProvider('Test',array('criteria'=>array('condition'=>'status3="Lulus"')));	
$dataDitolak=new CActiveDataProvider('Test',array('criteria'=>array('condition'=>'status1="Gagal"')));	

?>

<section class="col-xs-12">

	<?php 

	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			'tanggal',
			array(
				'name'=>'jabatan',
				'value'=>$model->Jabatan->nama,
				),

			array(
				'name'=>'bagian',
				'value'=>$model->Bagian->nama,
				),

			array(
				'name'=>'umur',
				'value'=>$model->umur,													
				),

			array(
				'name'=>'jeniskelamin',
				'value'=>$model->jeniskelamin == "L" ? "Laki-laki" : "Perempuan",													
				),					

			array(
				'name'=>'tipe',
				'value'=>Lowongan::model()->tipe($model->tipe),
				),

			array(
				'name'=>'status',
				'value'=>Lowongan::model()->status($model->status),
				),		

			array(
				'name'=>'jumlah_orang',
				'value'=>$model->jumlah_orang,
				),

			array(
				'name'=>'deskripsi_pekerjaan',
				'value'=>$model->deskripsi_pekerjaan,
				),

			array(
				'name'=>'deskripsi_kebutuhan',
				'value'=>$model->deskripsi_kebutuhan,
				),

			array(
				'name'=>'lokasi',
				'value'=>$model->lokasi,													
				),								

			))); 

			?>



			<H3>Pelamar Diterima ( <?php echo Yii::app()->db->createCommand("SELECT COUNT(id_test) FROM test WHERE status3='Lulus' AND status2='Lulus' AND status3='Lulus' AND lowongan_id=".$model->id_lowongan)->queryScalar() ?> Orang )</H3>
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'test-grid',
				'dataProvider'=>$dataDiterima,
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
							array(   
								'header'=>'Lihat',
								'type'=>'raw',
								'value'=>'CHtml::link("Profile", array("/user/view&id=$data->user_id/"))',
								),
					),
					)); ?>

				<H3>Pelamar Ditolak ( <?php echo Yii::app()->db->createCommand("SELECT COUNT(id_test) FROM test WHERE status1='Gagal' OR status2='Gagal' OR status3='Gagal' AND lowongan_id=".$model->id_lowongan)->queryScalar() ?> Orang )</H3>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'test-grid',
						'dataProvider'=>$dataDitolak,
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

							array(   
								'header'=>'Lihat',
								'type'=>'raw',
								'value'=>'CHtml::link("Profile", array("/user/view&id=$data->user_id/"))',
								),

							),
							)); ?>


