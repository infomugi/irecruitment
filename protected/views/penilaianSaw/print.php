<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	$model->Customer->nama,
	);

$this->pageTitle='Detail Penilaian SAW';
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
<h4>Profile Customer</h4>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		'tanggal',
		array('name'=>'customer_id','value'=>$model->Customer->nama),
		array('label'=>'Alamat','value'=>$model->Customer->alamat),
		array('label'=>'Sektor','value'=>Customer::model()->sektor($model->Customer->sektor)),
		array('label'=>'Industri','value'=>Customer::model()->industry($model->Customer->industri)),
		array('label'=>'Prodak','value'=>$model->Customer->prodak),
		),
		)); ?>


		<h4>Penilaian</h4>
		<TABLE class="table table-border">
			<THEAD>
				<TR>
					<TD>Character</TD>
					<TD>Capacity</TD>
					<TD>Capital</TD>
					<TD>Collateral</TD>
					<TD>Condition</TD>
					<TD>Cashflow</TD>
					<TD>Culture</TD>
				</TR>
			</THEAD>
			<TBODY>
				<TR>
					<TD><?php echo $model->Character->keterangan; ?></TD>
					<TD><?php echo $model->Capacity->keterangan; ?></TD>
					<TD><?php echo $model->Capital->keterangan; ?></TD>
					<TD><?php echo $model->Collateral->keterangan; ?></TD>
					<TD><?php echo $model->Condition->keterangan; ?></TD>
					<TD><?php echo $model->Cashflow->keterangan; ?></TD>
					<TD><?php echo $model->Culture->keterangan; ?></TD>
				</TR>
			</TBODY>
		</TABLE>

		<H4>Status : <span class="label label-info"><?php echo PenilaianSaw::model()->status($model->status); ?></span> - Skor : <span class="label label-success"><?php echo $model->nilai; ?></span> </H4>


				<center>
				<style type="text/css">
					#kotak{width: 800px}
					#kiri{width: 400px;float: left}
					#kanan{width: 400px;float: right}
				</style>
				<BR>
				<BR>
				<div id="kotak">
				<div id="kiri">
				Credit Analis
				<BR>
				<BR>
				<BR>
				<BR>
				<BR>
				( __________________________ )
				</div>
				<div id="kanan">
				Branch Manager
				<BR>
				<BR>
				<BR>
				<BR>
				<BR>
				( __________________________ )
				</div>
				</div>
				</center>
				<BR>
				<BR>
				
							<STYLE>
								th{width:150px;}
							</STYLE>

