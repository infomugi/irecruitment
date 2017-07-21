<?php
$this->pageTitle='Beranda';
?>

<div class="row">
	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="mini-stat clearfix bg-primary">
			<span class="mini-stat-icon"><i class="fa fa-dashboard"></i></span>
			<div class="mini-stat-info text-right text-white">
				<span class="counter">15852</span>
				Total Sales
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="mini-stat clearfix bg-primary">
			<span class="mini-stat-icon"><i class="fa fa-users"></i></span>
			<div class="mini-stat-info text-right text-white">
				<span class="counter">956</span>
				New Orders
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="mini-stat clearfix bg-primary">
			<span class="mini-stat-icon"><i class="fa fa-tasks"></i></span>
			<div class="mini-stat-info text-right text-white">
				<span class="counter">5210</span>
				New Users
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-6 col-xl-3">
		<div class="mini-stat clearfix bg-primary">
			<span class="mini-stat-icon"><i class="fa fa-info"></i></span>
			<div class="mini-stat-info text-right text-white">
				<span class="counter">20544</span>
				Unique Visitors
			</div>
		</div>
	</div>
</div>


<?php if(YII::app()->user->getLevel()==1): ?>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>
	<?php endif; ?>

