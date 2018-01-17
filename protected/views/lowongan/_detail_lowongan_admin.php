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
				'value'=>Lowongan::model()->gender($model->jeniskelamin),													
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

			array(
				'name'=>'jenjang',
				'value'=>Lowongan::model()->educationLevel($model->jenjang),													
				),	
			'nilai',							

			))); 


			?>



			<STYLE>
				th{width:100px;}
			</STYLE>

