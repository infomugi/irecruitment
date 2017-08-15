<?php
/* @var $this PenilaianSawController */
/* @var $data PenilaianSaw */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->Customer->kode ." - ". $data->Customer->nama), array('view', 'id'=>$data->id_penilaian_saw)); ?>
				<br />

				
			</div>
			<div class="box-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'tanggal',
						array('name'=>'penilai_id','value'=>$data->Penilai->namaLengkap),
						array('name'=>'pelamar_id','value'=>$data->Customer->nama),
						array('name'=>'c1','value'=>$data->Character->keterangan),
						array('name'=>'c2','value'=>$data->Capacity->keterangan),
						array('name'=>'c3','value'=>$data->Capital->keterangan),
						array('name'=>'c4','value'=>$data->Collateral->keterangan),
						array('name'=>'c5','value'=>$data->Condition->keterangan),
						array('name'=>'c6','value'=>$data->Cashflow->keterangan),
						array('name'=>'c7','value'=>$data->Culture->keterangan),
						array('name'=>'status','value'=>PenilaianSaw::model()->status($data->status)),
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
