<?php
$this->pageTitle='Beranda';
?>
<div class="row">
	<div class="col-lg-6 col-sm-6 col-xs-6">
		<div class="white-box">
			<h3 class="box-title">Pencarian Lamaran</h3>
			<?php 
			echo CHtml::beginForm(CHtml::normalizeUrl(array('filelamaran/search')), 'get')
			. CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan ID Pengajuan'))
			. CHtml::endForm();
			?>

		</div>
	</div>

	<div class="col-lg-6 col-sm-6 col-xs-6">
		<div class="white-box">
			<h3 class="box-title">Pencarian Lowongan</h3>
			<?php 
			echo CHtml::beginForm(CHtml::normalizeUrl(array('lowongan/search')), 'get')
			. CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan ID Job Order'))
			. CHtml::endForm();
			?>

		</div>
	</div>
</div>



<div class="row">
	<div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Total Lowongan</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-briefcase text-info"></i></li>
				<li class="text-right"><span class="counter"><?php echo Lowongan::model()->countJob(); ?></span></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Total Pelamar</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-files text-purple"></i></li>
				<li class="text-right"><span class="counter"><?php echo Lowongan::model()->countApplicant(); ?></span></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Pelamar Pria</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-user text-danger"></i></li>
				<li class="text-right"><span class=""><?php echo Lowongan::model()->countMale(); ?></span></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Pelamar Wanita</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-user text-success"></i></li>
				<li class="text-right"><span class=""><?php echo Lowongan::model()->countFemale(); ?></span></li>
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12">


		<div>	
			<ul class="nav nav-tabs">
				<li class="active"><a href="#0" data-toggle="tab"><i class="ti ti-briefcase"></i> <span class="hidden-xs">Lowongan Terpublikasi</span></a></a></li>
				<li><a  href="#1" data-toggle="tab"><i class="ti ti-briefcase"></i> <span class="hidden-xs">Statistik Lowongan</span></a></a></li>
			</ul>


			<div class="tab-content ">


				<div class="tab-pane active" id="0">

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'lowongan-grid',
						'dataProvider'=>$dataProvider,
						// 'filter'=>$model,
						'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
						'columns'=>array(


							array(
								'class'=>'CButtonColumn',
								'header'=>'Detail',
								'template'=>'{view}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("lowongan/view", array("id"=>$data->id_lowongan))',
										'imageUrl'=>'images/detail.png',
										),
									),
								),

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),


							array(
								'name'=>'perusahaan_id',
								'value'=>'"ID #".$data->id_lowongan . " - " . Lowongan::model()->perusahaan($data->perusahaan_id)',
								),

							'tanggal_kebutuhan',

							array(
								'name'=>'status',
								'value'=>'Lowongan::model()->status($data->status)',
								),					

							array(
								'name'=>'jabatan',
								'value'=>'$data->Jabatan->nama',
								),

							array(
								'name'=>'bagian',
								'value'=>'$data->Bagian->nama',
								),	

							),
							)); ?>

						</div>


						<div class="tab-pane" id="1">


							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'lowongan-grid',
								'dataProvider'=>$dataProvider,
					// 'filter'=>$model,
								'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
								'columns'=>array(


									array(
										'class'=>'CButtonColumn',
										'header'=>'Detail',
										'template'=>'{view}',
										'buttons'=>array(
											'view'=>
											array(
												'url'=>'Yii::app()->createUrl("lowongan/view", array("id"=>$data->id_lowongan))',
												'imageUrl'=>'images/detail.png',
												),
											),
										),


									array(
										'header'=>'No',
										'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
										'htmlOptions'=>array('width'=>'10px', 
											'style' => 'text-align: center;')),


									array(
										'name'=>'perusahaan_id',
										'value'=>'"ID #".$data->id_lowongan . " - " . Lowongan::model()->perusahaan($data->perusahaan_id)',
										),


									array(
										'name'=>'status',
										'value'=>'Lowongan::model()->checkEmployee($data->jumlah_orang,FileLamaran::model()->countStatus(5,$data->id_lowongan))',
										),	



									array(
										'name'=>'jumlah_orang',
										'value'=>'$data->jumlah_orang . " Pegawai "',
										),


									array(
										'header'=>'Total Pelamar',
										'value'=>'FileLamaran::model()->countStatusAll($data->id_lowongan)',
										),	

									array(
										'header'=>'Diterima',
										'value'=>'FileLamaran::model()->countStatus(5,$data->id_lowongan)',
										),	

									array(
										'header'=>'Ditolak',
										'value'=>'FileLamaran::model()->countStatus(9,$data->id_lowongan)',
										),		

									array(
										'header'=>'Pemanggilan',
										'value'=>'FileLamaran::model()->countStatus(2,$data->id_lowongan)',
										),	


									array(
										'header'=>'Terverifikasi',
										'value'=>'FileLamaran::model()->countStatus(1,$data->id_lowongan)',
										),	

									array(
										'header'=>'Pelamar Terbaru',
										'value'=>'FileLamaran::model()->countStatus(0,$data->id_lowongan)',
										),	


									array(
										'header'=>'Dibatalkan',
										'value'=>'FileLamaran::model()->countStatus(13,$data->id_lowongan)',
										),		

									),
									)); ?>

								</div>

							</div>
						</div>





					</div>

				</div>


