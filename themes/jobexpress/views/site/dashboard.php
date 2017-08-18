<?php
$this->pageTitle='Beranda';
?>


<?php if(YII::app()->user->getLevel()==1): ?>
	
	<div class="col-md-12">
		
		<div class="comment-center">

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'summaryText'=>'',
				)); ?>


			</div>

		</div>				


	<?php endif; ?>

