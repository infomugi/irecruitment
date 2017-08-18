<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
?>

<h4>
	<?php echo CHtml::link(CHtml::encode("Lowongan ".$data->Jabatan->nama . " untuk " . $data->Bagian->nama), array('view', 'id'=>$data->id_lowongan)); ?>
</h4>

<?php
$new=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'lowongan_id='.$data->id_lowongan.'','order'=>'id DESC')));
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lowongan-grid',
	'dataProvider'=>$new,
			// 'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
	'columns'=>array(

		// array(
		// 	'name'=>'id_people',
		// 	'value'=>'$data->Pelamar->email',													
		// 	),
		// array(
		// 	'name'=>'id_people',
		// 	'value'=>'$data->Pelamar->username',													
		// 	),		





		),
		)); ?>


