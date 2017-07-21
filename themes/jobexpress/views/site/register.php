<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
	);

$this->pageTitle=Yii::app()->name . ' - Registrasi';
?>


<main id="maincontent">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-md-offset-3">
				<div class="page-tab">
					<div id="form">
						<div id="userform">
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active border-right"><a href="#login" role="tab" data-toggle="tab">Registrasi</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="login">

									<div id="login">



										<?php echo $this->renderPartial('_form_register', array('model'=>$model,'Pelamar'=>$Pelamar)); ?>




									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>


