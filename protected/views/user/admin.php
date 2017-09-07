<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
	);

$this->pageTitle='Kelola Pengguna';
?>
<?php if(YII::app()->user->getLevel()==1){ ?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Tambah Staff',
			array('staff'),
			array('class' => 'btn btn-danger btn-flat','title'=>'Add User'));
		?>

	</span>
	<?php }else{ ?>

		<?php	} ?>
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

				'date_create',
				'username',
				'email',

				array('name'=>'level_ID',
					'value'=>'User::model()->level($data->level_ID)',
					'filter'=>array('0'=>'-','1'=>'Admin / Manager','5'=>'Staff','2'=>'Pelamar',),
					),

				array(
					'class'=>'CButtonColumn',
					'template'=>'{view}',
					),
				),
				)); ?>


