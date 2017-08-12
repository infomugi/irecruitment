<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->level_ID,
	);

$this->pageTitle='Detail Level';
?>



<?php echo CHtml::link('Tambah',
	array('create'),
	array('class' => 'btn btn-danger btn-flat','title'=>'Tambah Level'));
	?>
	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-danger btn-flat', 'title'=>'Daftar Level'));
		?>
		<?php echo CHtml::link('Kelola',
			array('admin'),
			array('class' => 'btn btn-danger btn-flat','title'=>'Kelola Level'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->level_ID,
					), array('class' => 'btn btn-success btn-flat', 'title'=>'Edit Level'));
					?>
					<?php echo CHtml::link('Hapus', 
						array('delete', 'id'=>$model->level_ID,
							),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Level'));
							?>


							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'level_ID',
									'level',
									),
									)); ?>


							<STYLE>
								th{width:150px;}
							</STYLE>

