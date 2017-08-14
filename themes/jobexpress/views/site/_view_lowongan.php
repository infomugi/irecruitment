<?php
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
if($data->status==1){
	$status = "label label-success";
}else{
	$status = "label label-danger";
}
?>
<small>

	<tr id="<?php echo $hide; ?>">
		<td>
			<h2>
				<?php echo CHtml::link(CHtml::encode($data->Jabatan->nama), array('lowongan/view', 'id'=>$data->id_lowongan)); ?> 
			</h2>
		</td>
		<td>
			<span class="<?php echo $status; ?>"><?php echo CHtml::encode($data->Bagian->nama); ?></span>
		</td>
	</tr>

</small>
