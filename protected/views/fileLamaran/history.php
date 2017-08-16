<?php
/* @var $this FileLamaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'File Lamarans',
	);

$this->pageTitle='Daftar File Lamaran';

$this->menu=array(
	array('label'=>'Create FileLamaran', 'url'=>array('create')),
	array('label'=>'Manage FileLamaran', 'url'=>array('admin')),
	);
	?>

	<div class="col-md-12">

		<div class="comment-center">

			<?php 
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view_history',
				'summaryText'=>'',
				)); 
				?>


			</div>

		</div>					




