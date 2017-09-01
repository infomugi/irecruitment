<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				),
			);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		$dataProvider=new CActiveDataProvider('Lowongan',array('criteria'=>array('condition'=>'status=1','order'=>'tanggal_kebutuhan DESC')),array('pagination'=>array(
			'pageSize'=>'4',
			)));


		if (!YII::app()->user->isGuest){
			
			$this->layout="admin";

			$this->render('dashboard',array(
				'dataProvider'=>$dataProvider,
				));

		}else{

			$this->layout="frontend";

			$this->render('index',array(
				'dataProvider'=>$dataProvider,
				));

		}

	}

	public function actionHelp()
	{
		if(Yii::app()->user->getLevel()==1){
			$this->render('help_admin');
		}else{
			$this->render('help');
		}
	}	

	public function actionAbout()
	{
		$this->layout="list";
		$this->render('index_about');
	}	

	public function actionVisiMisi()
	{
		$this->layout="list";
		$this->render('index_visimisi');
	}			

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
				"Reply-To: {$model->email}\r\n".
				"MIME-Version: 1.0\r\n".
				"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout="signin";		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				if(Yii::app()->user->getLevel()==1){
					$this->redirect(Yii::app()->homeUrl);
					// $this->redirect(array('filelamaran/unverified'));
				}else if(Yii::app()->user->getLevel()==2){
					$this->redirect(array('pelamar/profile'));
				}else{
					// $this->redirect(array('test/report'));
				}
			}
		// display the login form
			$this->render('login',array('model'=>$model));
		}

	/**
	 * Displays the register page
	 */
	public function actionRegister()
	{
		$this->layout="signin";	
		$model=new User;
		$model->setScenario('register_user');
		$Pelamar=new Pelamar;
		$Pelamar->setScenario('register_pelamar');
		$keahlian=new Keahlian;
		$dokumen=new Dokumen;
		$dokumen->setScenario('register_dokumen');

		$this->performAjaxValidation(array($model,$Pelamar));
		if(isset($_POST['User'],$_POST['Pelamar']))
		{
			$model->attributes=$_POST['User'];
			$Pelamar->attributes=$_POST['Pelamar'];
			$valid=$model->validate();
			$valid=$Pelamar->validate() && $valid;
			$model->image = "avatar.jpg";
			$model->password = md5($model->password);
			if($valid)
			{
				if($model->save(false)){
					$Pelamar->id_people = rand(1000000,2000000);
					$Pelamar->id_user = $model->id_user;
					$Pelamar->save();
					$keahlian->people_id = $Pelamar->id_people;
					$keahlian->user_id = $Pelamar->id_user;
					$keahlian->save();
					$dokumen->people_id = $Pelamar->id_people;
					$dokumen->user_id = $Pelamar->id_user;
					$dokumen->status = 0;
					$dokumen->tanggal = date('Y-m-d h:i:s');
					$dokumen->save(false);
					Yii::app()->user->setFlash('success', 'Selamat '.$model->username.' berhasil registrasi, silahkan login.');
					$this->redirect(array('site/login'));
				}


			}



		}

		$this->render('register',array(
			'model'=>$model,
			'Pelamar'=>$Pelamar,
			));
	}	

	protected function performAjaxValidation($models)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($models);
			Yii::app()->end();
		}
	}		

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


	public function actionReport()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',
			array(
				'criteria'=>array(
					'condition'=>'status=0',
					'order'=>'nilai DESC'))
			);
		$this->render('report',array(
			'dataProvider'=>$dataProvider,
			));
	}	
}