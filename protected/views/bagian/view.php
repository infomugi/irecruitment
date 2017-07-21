<?php
/* @var $this BagianController */
/* @var $model Bagian */

$this->breadcrumbs=array(
	'Bagians'=>array('index'),
	$model->id_bagian,
	);

$this->pageTitle='Detail Bagian';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'btn btn-info btn-flat','title'=>'Tambah Bagian'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'Daftar Bagian'));
			?>
			<?php echo CHtml::link('Kelola',
				array('admin'),
				array('class' => 'btn btn-info btn-flat','title'=>'Kelola Bagian'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_bagian,
						), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Bagian'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->id_bagian,
								),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Bagian'));
								?>

								<?php if($model->psikotest==""){ ?>
									<button class="btn btn-info btn-flat" disabled>File Psikotest Belum di Upload</button>
									<?php }else{ ?>
										<a href="<?php echo Yii::app()->request->baseUrl.'/psikotest/'.$model->psikotest; ?>" class="btn btn-info"><i class="fa fa-download"></i> Download</a>
										<?php } ?>

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
											// 'id_bagian',
													'nama',
													'deskripsi',
													'status',
													),
													)); ?>

												</section>

												<STYLE>
													th{width:150px;}
												</STYLE>

