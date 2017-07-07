<?php
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
?>
<tr id="<?php echo $hide; ?>">
	<td>
		<div class="tab-image hidden-xs"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo.png" alt="" class="img-responsive"></div><h2><?php echo CHtml::link(CHtml::encode($data->Jabatan->nama), array('lowongan/view', 'id'=>$data->id_lowongan)); ?> <span><?php echo CHtml::encode($data->Bagian->nama); ?></span></h2></td>
		<td class="work-time hidden-xs"><?php echo CHtml::encode($data->Bagian->nama); ?></td>
		<td><span class="ti-location-pin"></span><?php echo CHtml::encode($data->lokasi); ?></td>
		<td>
			<?php echo CHtml::link(CHtml::encode("Detail"), array('lowongan/view', 'id'=>$data->id_lowongan),array('class'=>'table-btn-default hidden-xs')); ?>
		</td>
	</tr>


