<?php if(Yii::app()->user->getLevel()!=2 && !Yii::app()->user->isGuest){ ?>

	<?php $this->beginContent('//layouts/admin'); ?>
	<!-- Include content pages -->
	<?php echo $content; ?>
	<?php $this->endContent(); ?>

	<?php }else{ ?>

		<?php $this->beginContent('//layouts/main'); ?>
		<!-- Include content pages -->
		<?php echo $content; ?>
		<?php $this->endContent(); ?>

		<?php } ?>
