<?php
/* @var $this LowonganController */
/* @var $model Lowongan */

$this->breadcrumbs=array(
	'Lowongans'=>array('index'),
	$model->id_lowongan,
	);

$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'lowongan_id="'.$model->id_lowongan.'"')));
$this->pageTitle='Lowongan - '.$model->Jabatan->nama . " - " .$model->Bagian->nama;
?>


<?php 
$lewat = CHtml::encode(Lowongan::model()->deadline($model->tanggal_kebutuhan));
if($lewat!="Telah lewat"){

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


		//Notifikasi Apabila Levelnya tidak Sama dengan = 1 (Admin)
	if(Yii::app()->user->getLevel()!=1):

		if(!YII::app()->user->isGuest){

			$profile=Pelamar::model()->findByAttributes(array('id_user'=>YII::app()->user->id));

			if($profile->jenis_kelamin==$model->jeniskelamin){

				$umur = Pelamar::model()->countBirth($profile->tanggal_lahir);

				if($model->umur>$umur){

					echo CHtml::link('Melamar', 
						array('filelamaran/lamar', 'job'=>$model->id_lowongan, 'user'=>YII::app()->user->id), 
						array('class' => 'btn-style-1 btn-lg', 'title'=>'Melamar'));

				}else{

					echo "<div class='alert alert-warning'>Maaf, Maksimal umur lowongan ini ".$model->umur." Tahun - ( Umur Anda Sekarang ".$umur." Tahun )</div>";

				}

			}else{

				$gender = $model->jeniskelamin == "L" ? "Laki-laki" : "Perempuan";
				echo "<div class='alert alert-warning'>Maaf, Lowongan Ini Diprioritaskan untuk ".$gender."</div>";

			}

		}else{

			echo CHtml::link('Melamar', 
				array('filelamaran/lamar', 'job'=>$model->id_lowongan, 'user'=>YII::app()->user->id), 
				array('class' => 'btn-style-1 btn-lg', 'title'=>'Melamar'));
			
		}
		endif;
		
	}else{

		if(YII::app()->user->isGuest):
			echo "<div class='alert alert-info'>Maaf, Lowongan Ini Sudah Tidak Tersedia</div>";
		endif;

		if(YII::app()->user->getLevel()==2):
			echo "<div class='alert alert-info'>Maaf, Lowongan Ini Sudah Tidak Tersedia</div>";
		endif;
	}

	if(!YII::app()->user->isGuest):
		if(YII::app()->user->getLevel()==1):
			$this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'file-lamaran-grid',
				'dataProvider'=>$dataProvider,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(
					'tanggal_upload',
					'status_lamaran',
					),
				));
		endif;
		endif;
		?>


		<STYLE>
			th{width:200px;}
		</STYLE>

