<?php
/* @var $this LowonganController */
/* @var $data Lowongan */
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
?>

<h4>
	<?php echo CHtml::link(CHtml::encode("Lowongan ".$data->Jabatan->nama . " untuk " . $data->Bagian->nama), array('view', 'id'=>$data->id_lowongan)); ?>
</h4>


<?php
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		array(
			'name'=>'umur',
			'value'=>$data->umur,													
			),

		array(
			'name'=>'jeniskelamin',
			'value'=>$data->jeniskelamin == "L" ? "Laki-laki" : "Perempuan",													
			),					


		array(
			'name'=>'deskripsi_pekerjaan',
			'value'=>$data->deskripsi_pekerjaan,
			),

		array(
			'name'=>'deskripsi_kebutuhan',
			'value'=>$data->deskripsi_kebutuhan,
			),							

		))); 

		?>

		<?php echo CHtml::link('Ubah', 
			array('update', 'id'=>$data->id_lowongan,
				), array('class' => 'btn btn-danger btn-flat pull-right', 'title'=>'Edit Pekerjaan'));
				?>
				<BR>
					<BR>

						<HR>