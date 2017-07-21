<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage User';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-info btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add User',
				array('create'),
				array('class' => 'btn btn-info btn-flat'));
				?>
				<?php echo CHtml::link('List User',
					array('index'),
					array('class' => 'btn btn-info btn-flat'));
					?>

				</span>	

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'user-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

							// 'id_user',
						'username',
							// 'password',
						'email',
							// 'date_create',
							// 'level_ID',
						array(
							'class'=>'CButtonColumn',
							'template'=>'{view}',
							),
						),
						)); ?>


