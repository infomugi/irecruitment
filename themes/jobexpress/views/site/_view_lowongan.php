<?php
$hide = Lowongan::model()->hide($data->tanggal_kebutuhan);
if($data->status==1){
	$status = "label label-success";
}else{
	$status = "label label-danger";
}
?>

<!-- Job item -->
<div class="col-xs-12">
	<a class="item-block" href="<?php echo YII::app()->baseUrl; ?>/lowongan/view/id/<?php echo CHtml::encode($data->id_lowongan); ?>">
		<header>
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/frontend/img/logo-alt.png" alt="">
			<div class="hgroup">
				<h4>Lowongan <?php echo CHtml::encode($data->Bagian->nama); ?></h4>
				<h5><?php echo Lowongan::model()->educationLevel($data->jenjang); ?></h5>
			</div>
			<div class="header-meta">
				<span class="location"><?php echo CHtml::encode($data->Perusahaan->alamat); ?></span>
				<span class="<?php echo CHtml::encode($status); ?>"><?php echo CHtml::encode($data->Perusahaan->nama); ?></span>
			</div>
		</header>
	</a>
</div>
<!-- END Job item -->
