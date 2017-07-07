<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
  );
  ?>

  <main id="maincontent">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-offset-3">
          <div class="page-tab">
            <div id="form">
              <div id="userform">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                  <li class="active border-right"><a href="#login" role="tab" data-toggle="tab">Log in</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="login">

                    <div id="login">

                      <?php
                      foreach(Yii::app()->user->getFlashes() as $key => $message) {
                        echo '</BR><div class="alert alert-' . $key . '">' . $message . "</div>\n";
                      }
                      ?>

                      <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableAjaxValidation'=>false,
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                          'validateOnSubmit' => true,
                          ),
                        'errorMessageCssClass' => 'label label-info',
                        'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
                        )); ?>

                        <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

                        <div class="form-group">
                          <label> Username or E-mail</label>
                          <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username')); ?>

                          <div class="search_icon"><span class="ti-user"></span></div>
                        </div>
                        <div class="form-group">
                          <label> Password</label>
                          <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
                          <div class="search_icon"><span class="ti-pin"></span></div>
                        </div>
                        <div class="mrgn-30-top">
                         <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-larger btn-block')); ?>
                       </div>

                       <?php $this->endWidget(); ?>  

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

