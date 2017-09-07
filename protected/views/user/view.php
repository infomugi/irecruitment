<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Detail User';
?>



<?php if(YII::app()->user->getLevel()==1): ?>
	<span class="hidden-xs">

		<?php echo CHtml::link('Kelola Akun',
			array('admin'),
			array('class' => 'btn btn-danger btn-flat','title'=>'Manage User'));
			?>

			<?php echo CHtml::link('Edit Password',
				array('editstaffpassword'),
				array('class' => 'btn btn-danger btn-flat','title'=>'Password'));
				?>

			</span>
		<?php endif; ?>

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

