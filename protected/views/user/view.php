<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Detail User';
?>


<span class="hidden-xs">

	<?php echo CHtml::link('Tambah',
		array('create'),
		array('class' => 'btn btn-danger btn-flat','title'=>'Add User'));
		?>
		<?php echo CHtml::link('Kelola',
			array('admin'),
			array('class' => 'btn btn-danger btn-flat','title'=>'Manage User'));
			?>
			<?php echo CHtml::link('Edit', 
				array('update', 'id'=>$model->id_user,
					), array('class' => 'btn btn-danger btn-flat', 'title'=>'Edit User'));
					?>
					<?php echo CHtml::link('Delete', 
						array('delete', 'id'=>$model->id_user,
							),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus User'));
							?>

						</span>

						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								'username',
								'email',
								'date_create',
								),
								)); ?>

						<STYLE>
							th{width:150px;}
						</STYLE>

