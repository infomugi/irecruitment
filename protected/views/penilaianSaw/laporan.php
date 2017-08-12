<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->pageTitle='Laporan Penilaian Customer';
?>

<center>
	<img src="<?php echo Yii::app()->theme->baseUrl;?>/admin/img/logo.png" alt="Logo">
	<div class="row">
		<div class="col-md-12">
			<h4>Persetujuan Pembiayaan</h4>
			<h5>PT. BFI Finance Indonesia Tbk</h5>
		</div>
	</div>
</center>
<HR>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'penilaian-saw-grid',
		'summaryText'=>'',
		'dataProvider'=>$dataProvider,
		'itemsCssClass' => 'table table-bordered',
		'columns'=>array(

			array(
				'header'=>'No',
				'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
				'htmlOptions'=>array('width'=>'10px', 
					'style' => 'text-align: center;')),

			array('header'=>'Customer','value'=>'$data->Customer->nama'),
			array('header'=>'C1','value'=>'$data->Character->keterangan'),
			array('header'=>'C2','value'=>'$data->Capacity->keterangan'),
			array('header'=>'C3','value'=>'$data->Capital->keterangan'),
			array('header'=>'C4','value'=>'$data->Collateral->keterangan'),
			array('header'=>'C5','value'=>'$data->Condition->keterangan'),
			array('header'=>'C6','value'=>'$data->Cashflow->keterangan'),
			array('header'=>'C7','value'=>'$data->Culture->keterangan'),


			),
			)); ?>

			<BR>
				<BR>
					<center>
						<div class="row">
							<div class="col-md-6">Credit Analis</div>
							<div class="col-md-6">Branch Manager</div>
						</div>
						<BR>
							<BR>
								<BR>
									<div class="row">
										<div class="col-md-6">( __________________________ )</div>
										<div class="col-md-6">( __________________________ )</div>
									</div>
								</center>
								<STYLE>
									th{width:150px;}
								</STYLE>

