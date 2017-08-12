<?php
/* @var $this CripsController */
/* @var $model Crips */

$this->breadcrumbs=array(
	'Crips'=>array('index'),
	$model->id_crips,
	);

$this->pageTitle='Detail Crips';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'default-button'));
		?>
		<?php echo CHtml::link('Daftar',
			array('index'),
			array('class' => 'default-button'));
			?>
			<?php echo CHtml::link('Kelola',
				array('admin'),
				array('class' => 'default-button'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_crips,
						), array('class' => 'default-button'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->id_crips,
								),  array('class' => 'default-button'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'id_crips',
											'kriteria_id',
											'keterangan',
											'nilai',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

