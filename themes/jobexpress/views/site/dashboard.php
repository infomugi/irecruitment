<?php
$this->pageTitle='Beranda';
?>

<?php if(YII::app()->user->getLevel()==1): ?>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>
	<?php endif; ?>

