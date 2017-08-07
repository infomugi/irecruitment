<?php
/* @var $this KeahlianController */
/* @var $data Keahlian */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_keahlian), array('view', 'id'=>$data->id_keahlian)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_keahlian',
		'word',
		'excel',
		'powerpoint',
		'sql',
		'lan',
		'wan',
		'bahasa_pascal',
		'c',
		'php',
		'java',
		'people_id',
		'user_id',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
