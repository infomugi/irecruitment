<?php
/* @var $this FileLamaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'File Lamarans',
	);

$this->pageTitle='Daftar File Lamaran';

$this->menu=array(
	array('label'=>'Create FileLamaran', 'url'=>array('create')),
	array('label'=>'Manage FileLamaran', 'url'=>array('admin')),
	);
	?>
	<?php if(YII::app()->user->getLevel()==1): ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i> Semua', 
			array('index'
				), array('class' => 'btn btn-danger btn-flat', 'title'=>'Daftar Semua Lamaran'));
				?>	

				<?php echo CHtml::link('<i class="fa fa-remove"></i> Belum Verifikasi', 
					array('unverified'
						), array('class' => 'btn btn-danger btn-flat', 'title'=>'Daftar Lamaran Belum di Verifikasi'));
						?>

						<?php echo CHtml::link('<i class="fa fa-check"></i> Diverifikasi', 
							array('verified'
								), array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Lamaran Diterima'));
								?>	

								<?php echo CHtml::link('<i class="fa fa-remove"></i> Belum di Panggil', 
									array('uncall'
										), array('class' => 'btn btn-danger btn-flat', 'title'=>'Daftar Belum di Panggil'));
										?>

										<?php echo CHtml::link('<i class="fa fa-check"></i> Sudah di Panggil', 
											array('call'
												), array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Sudah di Panggil'));
												?>		

												<?php echo CHtml::link('<i class="fa fa-remove"></i> Ditolak', 
													array('reject'
														), array('class' => 'btn btn-danger btn-flat', 'title'=>'Daftar Lamaran Ditolak'));
														?>			

														<?php echo CHtml::link('<i class="fa fa-check"></i> Diterima', 
															array('accept'
																), array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Lamaran Diterima'));
																?>

																

															<?php endif; ?>			

															<div class="col-md-12">

																<div class="comment-center">

																	<?php 
																	$this->widget('zii.widgets.CListView', array(
																		'dataProvider'=>$dataProvider,
																		'itemView'=>'_view',
																		'summaryText'=>'',
																		)); 
																		?>


																	</div>

																</div>					




