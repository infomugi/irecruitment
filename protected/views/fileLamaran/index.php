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
		<?php echo CHtml::link('<i class="fa fa-tasks"></i> Semua Lamaran', 
			array('index'
				), array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Semua Lamaran'));
				?>	

				<?php echo CHtml::link('<i class="fa fa-server"></i> Belum Verifikasi', 
					array('unverified'
						), array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Lamaran Belum di Verifikasi'));
						?>

						<?php echo CHtml::link('<i class="fa fa-check"></i> Diverifikasi', 
							array('verified'
								), array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Lamaran Diterima'));
								?>						

								<?php echo CHtml::link('<i class="fa fa-check"></i> Diterima', 
									array('accept'
										), array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Lamaran Diterima'));
										?>

										<?php echo CHtml::link('<i class="fa fa-remove"></i> Ditolak', 
											array('reject'
												), array('class' => 'btn btn-primary btn-flat', 'title'=>'Daftar Lamaran Ditolak'));
												?>

											<?php endif; ?>								

											<section class="resumes-section">
												<div class="resumes-content">

													<?php $this->widget('zii.widgets.CListView', array(
														'dataProvider'=>$dataProvider,
														'itemView'=>'_view',
														)); ?>

													</div>
												</section>
