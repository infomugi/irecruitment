<?php
/* @var $this KriteriaController */
/* @var $model Kriteria */

$this->breadcrumbs=array(
	'Kriterias'=>array('index'),
	$model->id_kriteria,
	);

$this->pageTitle='Detail Kriteria';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'btn btn-danger'));
		?>
		<?php echo CHtml::link('Daftar',
			array('index'),
			array('class' => 'btn btn-danger'));
			?>
			<?php echo CHtml::link('Kelola',
				array('admin'),
				array('class' => 'btn btn-danger'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_kriteria,
						), array('class' => 'btn btn-danger'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->id_kriteria,
								),  array('class' => 'btn btn-danger'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											// 'id_kriteria',
											'kode',
											'nama',
											'atribut',
											'bobot',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

