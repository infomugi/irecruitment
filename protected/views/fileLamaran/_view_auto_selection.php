<H4><i class="ti-clipboard pull-left"></i> &nbsp Auto Seleksi</H4>
<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
		<td><b>Kriteria Khusus</b></td>
		<td><b>Kualifikasi</b></td>
		<td><b>Pelamar</b></td>
		<td><b>Status</b></td>
	</tr>
	<tr>
		<td>Nilai Terakhir / IPK</td>
		<td><?php echo $model->Lowongan->nilai; ?></td>
		<td><?php echo $dataProfile->nilai; ?></td>

		<td>

			<?php 
			if($model->Lowongan->jenjang==2){

				// Validasi IPK
				if($dataProfile->nilai<="4.00"){

					// Bandingkan IPK
					if($model->Lowongan->nilai<=$dataProfile->nilai){
						echo "<span class='label label-success'>Sesuai</span>";
						$nilai1 = 25;
					}else{
						echo "<span class='label label-danger'>Tidak Sesuai Kualifikasi</span>";
						$nilai1 = 0;
					} 

				}else{
					echo "<span class='label label-warning'>IPK Tidak Valid (Grade 1 - 4)</span>";
					$nilai1 = 0;
				} 

			}else{

				// Validasi IPK
				if($dataProfile->nilai<="100"){

					// Bandingkan IPK
					if($model->Lowongan->nilai<=$dataProfile->nilai){
						echo "<span class='label label-success'>Sesuai</span>";
						$nilai1 = 25;
					}else{
						echo "<span class='label label-danger'>Tidak Sesuai Kualifikasi</span>";
						$nilai1 = 0;
					} 

				}else{
					echo "<span class='label label-warning'>Nilai Tidak Valid (Grade 0 - 100)</span>";
					$nilai1 = 0;
				} 

			} 
			?>

		</td>

	</tr>
	<tr>
		<td>Pendidikan Terakhir</td>
		<td><?php echo Lowongan::model()->educationLevel($model->Lowongan->jenjang); ?></td>
		<td><?php echo Lowongan::model()->educationLevel($dataProfile->jenjang); ?></td>

		<td>

			<?php 
			if($model->Lowongan->jenjang==$dataProfile->jenjang){
				echo "<span class='label label-success'>Sesuai</span>";
				$nilai2 = 25;
			}else{
				echo "<span class='label label-danger'>Tidak Sesuai Kualifikasi</span>";
				$nilai2 = 0;
			} 
			?>

		</td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $model->Lowongan->jeniskelamin; ?></td>
		<td><?php echo $dataProfile->jenis_kelamin; ?></td>
		<td>

			<?php 
			if($dataProfile->jenis_kelamin==$dataProfile->jenis_kelamin){
				echo "<span class='label label-success'>Sesuai</span>";
				$nilai3 = 25;
			}else{
				echo "<span class='label label-danger'>Tidak Sesuai Kualifikasi</span>";
				$nilai3 = 0;
			} 
			?>

		</td>
	</tr>


	<tr>
		<td>Usia Maksimal</td>
		<td><?php echo $model->Lowongan->umur; ?></td>
		<td><?php echo $usia = Pelamar::model()->countBirth($dataProfile->tanggal_lahir); ?></td>

		<td>

			<?php 
			if($usia<=$model->Lowongan->umur){
				echo "<span class='label label-success'>Sesuai</span>";
				$nilai4 = 25;
			}else{
				echo "<span class='label label-danger'>Tidak Sesuai Kualifikasi</span>";
				$nilai4 = 0;
			} 

			?>

		</td>
	</tr>


</table>

<H5 class="alert alert-success"><i class="ti-clipboard pull-right"></i> Presentase Kesesuaian ( <?php echo $nilai1 + $nilai2 + $nilai3 + $nilai4; ?>% ) &nbsp </H5>
