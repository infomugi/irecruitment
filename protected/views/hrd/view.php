<?php
/* @var $this PelamarController */
/* @var $model Pelamar */

$this->breadcrumbs=array(
	'Pelamars'=>array('index'),
	$model->id_hrd,
	);

$this->menu=array(
	array('label'=>'Daftar Pelamar', 'url'=>array('index')),
	array('label'=>'Kelola Pelamar', 'url'=>array('admin')),
	);
$this->pageTitle='Data Diri - '.ucfirst($model->nama);
?>


<?php if($model->tempat_lahir!=""){ ?>

	<h3><span class="ti-user"></span> <?php echo ucfirst($model->nama); ?></h3>

	<div class="row">
		<div class="col-md-9">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table table-bordered table-striped dataTable table-hover"),
				'attributes'=>array(
					'nik',
					'nama',
					'tempat_lahir',
					'tanggal_lahir',
					array('name'=>'agama','value'=>Pelamar::model()->religion($model->agama)),
					'jenis_kelamin',
					array('name'=>'kewarganegaraan','value'=>Pelamar::model()->national($model->kewarganegaraan)),
					array('label'=>'Umur','value'=>Pelamar::model()->countBirth($model->tanggal_lahir)." Tahun"),
					'hp',
					'alamat_domisili',
					),
				)); ?>

		</div>


		<div class="col-md-3">


			<H4><i class="ti-clipboard pull-left"></i> Foto</H4>

			<center>
				<img src="<?php echo Yii::app()->baseUrl. "/lamaran/foto/" .User::model()->avatar($model->id_user); ?>" class="img-responsive">
			</center>

		</div>
	</div>


	<?php }else{ ?>
		<div class="alert alert-warning">
			Selamat Datang <span class="text-bold" style="font-weight:700;"><?php echo YII::app()->user->name; ?></span>, Data Profile Anda Belum Lengkap (
				<?php echo CHtml::link('Klik Disini', 
					array('update', 'id'=>$model->id_hrd,
						),array('class'=>'label label-danger'));
				?> Untuk Melengkapi
				)
		</div>
		<?php } ?>


		<STYLE>
			th{width:150px;}
		</STYLE>
