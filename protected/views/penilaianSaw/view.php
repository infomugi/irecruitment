<?php
/* @var $this PenilaianSawController */
/* @var $model PenilaianSaw */

$this->breadcrumbs=array(
	'Penilaian Saws'=>array('index'),
	$model->Pelamar->username,
	);

$this->pageTitle='Detail Penilaian SAW';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Perhitungan SAW',
		array('perhitungan'),
		array('class' => 'default-button'));
		?>
		<?php echo CHtml::link('Edit', 
			array('update', 'id'=>$model->id_penilaian_saw,
				), array('class' => 'default-button'));
				?>
				<?php echo CHtml::link('Hapus', 
					array('delete', 'id'=>$model->id_penilaian_saw,
						),  array('class' => 'default-button'));
						?>



						<HR>

							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'tanggal',
									array('name'=>'penilai_id','value'=>$model->Penilai->namaLengkap),
									array('name'=>'pelamar_id','value'=>$model->Pelamar->nama),
									array('name'=>'c1','value'=>$model->Character->keterangan),
									array('name'=>'c2','value'=>$model->Capacity->keterangan),
									array('name'=>'c3','value'=>$model->Capital->keterangan),
									array('name'=>'c4','value'=>$model->Collateral->keterangan),
									array('name'=>'c5','value'=>$model->Condition->keterangan),
									array('name'=>'c6','value'=>$model->Cashflow->keterangan),
									array('name'=>'c7','value'=>$model->Culture->keterangan),
									array('name'=>'status','value'=>PenilaianSaw::model()->status($model->status)),
									),
									)); ?>

									<HR>
										<?php if($model->status==0){ ?>

											<?php echo CHtml::link('Terima', 
												array('terima', 'id'=>$model->id_penilaian_saw,
													), array('class' => 'default-button'));
											?>

											<?php echo CHtml::link('Pending', 
												array('pending', 'id'=>$model->id_penilaian_saw,
													), array('class' => 'default-button'));
											?>

											<?php echo CHtml::link('Tolak', 
												array('tolak', 'id'=>$model->id_penilaian_saw,
													), array('class' => 'default-button'));
											?>

											<?php }else{ ?>
												<?php
												if($model->status==1){
													$alert = "success";
												}else if($model->status==2){
													$alert = "info";
												}else if($model->status==2){
													$alert = "danger";
												}else{
													$alert = "warning";
												}
												?>
												<div class="alert alert-<?php echo $alert ?>"><?php echo PenilaianSaw::model()->status($model->status); ?></div>

												<?php echo CHtml::link('Cetak Laporan', 
													array('print', 'id'=>$model->id_penilaian_saw,
														), array('class' => 'default-button'));
												?>

												<?php } ?>

												<HR>

												</section>

												<STYLE>
													th{width:150px;}
												</STYLE>

