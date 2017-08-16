<?php if(YII::app()->user->getLevel()==1): ?>

	<?php if($model->status_lamaran=="Diverifikasi"): ?>

		<?php if($model->test_id==1): ?>
			<?php echo CHtml::link('<i class="fa fa-plus"></i> Buat Pengumuman', 
				array('test/create', 'loker'=>$model->lowongan_id, 'lamaran'=>$model->id, 'user'=>$model->user_id
					), array('class' => 'btn btn-danger btn-flat', 'title'=>'Buat Pengumuman Test'));
					?>	 	
				<?php endif; ?>

			<?php endif; ?>

			<?php if($model->status_lamaran!="Ditolak"): ?>

				<?php if($model->status_lamaran=="Diverifikasi"){ ?>

					<button class="btn btn-danger btn-flat" disabled>Lamaran telah Diverifikasi</button>

					<?php 
					echo CHtml::link('<i class="fa fa-star"></i> Buat Penilaian', 
						array('penilaiansaw/create', 'pelamar'=>$model->user_id, 'lowongan'=>$model->lowongan_id, 'lamaran'=>$model->id,
							), array('class' => 'btn btn-danger pull-right btn-flat', 'title'=>'Buat Penilaian'));
					?>

					<HR>

						<?php }else{ ?>

							<?php 
							echo CHtml::link('<i class="fa fa-check"></i> Verifikasi Lamaran', 
								array('diterima', 'id'=>$model->id,
									), array('class' => 'btn btn-danger btn-flat', 'title'=>'Terima Lamaran'));
							?>

							<HR>

								<?php } ?>

							<?php endif; ?>

							<?php if($model->status_lamaran!="Diverifikasi"): ?>

								<?php echo CHtml::link('<i class="fa fa-remove"></i> Tolak', 
									array('ditolak', 'id'=>$model->id,
										), array('class' => 'btn btn-danger btn-flat', 'title'=>'Tolak Lamaran'));
										?>
									<?php endif; ?>

								<?php endif; ?>
