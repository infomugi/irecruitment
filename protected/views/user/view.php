<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Detail User';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-danger btn-flat','title'=>'Add User'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-danger btn-flat', 'title'=>'List User'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-danger btn-flat','title'=>'Manage User'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_user,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus User'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-danger btn-flat','title'=>'Add User'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-danger btn-flat', 'title'=>'List User'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-danger btn-flat','title'=>'Manage User'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_user,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
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
																	// 'id_user',
																'username',
																	// 'password',
																'email',
																'date_create',
																	// 'level_ID',
																),
																)); ?>

														<STYLE>
															th{width:150px;}
														</STYLE>

