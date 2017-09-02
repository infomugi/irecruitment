	<?php if($model->status_lamaran==0){ ?>

		<?php echo CHtml::link('<i class="fa fa-check"></i> Verifikasi', 
			array('verifikasi', 'id'=>$model->id,
				), array('class' => 'btn btn-info btn-flat', 'title'=>'Verifikasi Lamaran'));
		?>

		<?php echo CHtml::link('<i class="fa fa-close"></i> Tolak', 
			array('tidaklulus', 'id'=>$model->id,
				), array('class' => 'btn btn-danger btn-flat', 'title'=>'Tolak Lamaran'));
		?>

		<?php }elseif($model->status_lamaran==1){ ?>

			<?php echo CHtml::link('<i class="fa fa-phone"></i> Panggil', 
				array('pemanggilan', 'id'=>$model->id,
					), array('class' => 'btn btn-warning btn-flat', 'title'=>'Panggil Pelamar'));
			?>

			<?php echo CHtml::link('<i class="fa fa-close"></i> Tolak', 
				array('tidaklulus', 'id'=>$model->id,
					), array('class' => 'btn btn-danger btn-flat', 'title'=>'Tolak Lamaran'));
			?>

			<?php }elseif($model->status_lamaran==2){ ?>

				<?php echo CHtml::link('<i class="fa fa-phone"></i> Sudah di Panggil', 
					array('sudahdipanggil', 'id'=>$model->id,
						), array('class' => 'btn btn-success btn-flat', 'title'=>'Sudah di Panggil ?'));
				?>

				<?php echo CHtml::link('<i class="fa fa-close"></i> Tolak', 
					array('tidaklulus', 'id'=>$model->id,
						), array('class' => 'btn btn-danger btn-flat', 'title'=>'Tolak Lamaran'));
				?>

				<?php }elseif($model->status_lamaran==3){ ?>

					<?php if($model->penilaian_id==0): ?>
					<?php echo CHtml::link('<i class="fa fa-tasks"></i> Penilaian', 
						array('penilaiansaw/create', 'pelamar'=>$model->user_id, 'lowongan'=>$model->lowongan_id, 'lamaran'=>$model->id), array('class' => 'btn btn-info btn-flat', 'title'=>'Buat Penilaian'));
					?>
				<?php endif; ?>

				<?php echo CHtml::link('<i class="fa fa-close"></i> Tolak', 
					array('tidaklulus', 'id'=>$model->id,
						), array('class' => 'btn btn-danger btn-flat', 'title'=>'Tolak Lamaran'));
				?>


				<?php } ?>	