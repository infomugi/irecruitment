<?php
/* @var $this FileLamaranController */
/* @var $model FileLamaran */
$this->pageTitle='Upload - Hasil Psikotest';
?>

<h1>Upload Hasil Psikotest #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_psikotest', array('model'=>$model)); ?>