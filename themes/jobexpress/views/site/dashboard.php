<?php
$this->pageTitle='Beranda';
?>
<section class="resumes-section">
<div class="resumes-content">

	<?php if(YII::app()->user->getLevel()==1): ?>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>
	<?php endif; ?>

	</div>
</section>