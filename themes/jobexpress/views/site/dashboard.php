<?php
$this->pageTitle='Beranda';
?>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Pencarian ID</h3>
			<?php 
			echo CHtml::beginForm(CHtml::normalizeUrl(array('filelamaran/search')), 'get')
			. CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan ID Pengajuan'))
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
			<h3 class="box-title">Pelamar Wanita</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-user text-danger"></i></li>
				<li class="text-right"><span class=""><?php echo Lowongan::model()->countMale(); ?></span></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Pelamar Pria</h3>
			<ul class="list-inline two-part">
				<li><i class="ti-user text-success"></i></li>
				<li class="text-right"><span class=""><?php echo Lowongan::model()->countFemale(); ?></span></li>
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Total Lowongan</h3>


			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'lowongan-grid',
				'dataProvider'=>$dataProvider,
	// 'filter'=>$model,
				'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'tanggal_kebutuhan',

					array(
						'name'=>'status',
						'value'=>'Lowongan::model()->status($data->status)',
						),					

					array(
						'name'=>'perusahaan_id',
						'value'=>'Lowongan::model()->perusahaan($data->perusahaan_id)',
						),

					array(
						'name'=>'jabatan',
						'value'=>'$data->Jabatan->nama',
						),

					array(
						'name'=>'bagian',
						'value'=>'$data->Bagian->nama',
						),


					array(
						'header'=>'Total Pelamar',
						'value'=>'Lowongan::model()->countApply($data->id_lowongan)',
						),		

					),
					)); ?>

				</div>
			</div>