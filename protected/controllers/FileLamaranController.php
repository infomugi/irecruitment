<?php

class FileLamaranController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('lamar','update','view','delete','history','upload','dibatalkan','psikotest'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),			
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','history','diterima','ditolak','unverified','verified','reject','lulus','accept'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('deny',
				'users'=>array('*'),
				),
			);
	}	

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('keterangan');

		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id'=>$model->id_people);
		$criteria->order = 'tahun_lulus DESC';		

		$dataProviders=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		if(isset($_POST['FileLamaran']))
		{
			$model->attributes=$_POST['FileLamaran'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('view',array(
			'model'=>$model,
			'dataProviders'=>$dataProviders,
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionLamar($job,$user)
	{
		$model=new FileLamaran;
		$model->lowongan_id = $job;
		$model->id_people = $user;
		$model->tanggal_upload = date('Y-m-d h:i:s');
		$model->status_lamaran = "Belum di Verifikasi";
		$model->save();
		$this->redirect(array('history'));
	}

	public function actionUpload($job,$user)
	{
		$model=new FileLamaran;
		$model->setScenario('lamar');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FileLamaran']))
		{
			$model->attributes=$_POST['FileLamaran'];
			$model->lowongan_id = $job;
			$model->id_people = $user;
			$model->tanggal_upload = date('Y-m-d h:i:s');
			$model->status_lamaran = "Belum di Verifikasi";
			$model->test_id = 1;

			$model->file_lamaran=CUploadedFile::getInstance($model,'file_lamaran');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'file_lamaran'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file_lamaran'); 
				$model->file_lamaran=$model->lowongan_id.$model->id_people.rand(1000,2000).'-'.date('hms').'.'.$tmp->extensionName; 
			}


			if($model->save()){
				if(strlen(trim($model->file_lamaran)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/'.$model->file_lamaran);
				$this->redirect(array('history'));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}		

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('lamar');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FileLamaran']))
		{
			$model->attributes=$_POST['FileLamaran'];
			$model->test_id = 1;
			$model->file_lamaran=CUploadedFile::getInstance($model,'file_lamaran');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'file_lamaran'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'file_lamaran'); 
				$model->file_lamaran="Lamaran".$model->id.$model->id_people.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->file_lamaran)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/'.$model->file_lamaran);				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			));
	}


	public function actionPsikotest($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('psikotest');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FileLamaran']))
		{
			$model->attributes=$_POST['FileLamaran'];

			$model->psikotest=CUploadedFile::getInstance($model,'psikotest');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'psikotest'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'psikotest'); 
				$model->psikotest="Psikotest".$model->id.$model->id_people.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->psikotest)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/psikotest/'.$model->psikotest);				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('psikotest',array(
			'model'=>$model,
			));
	}	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',
			array(
				'sort'=>array(
					'defaultOrder'=>'id DESC',
					)
				)
			);			
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionUnverified()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Belum di Verifikasi"'), ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionVerified()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Diverifikasi"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionAccept()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Diterima"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionReject()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Ditolak"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}				

	public function actionHistory()
	{
		if(Yii::app()->user->getLevel()==1){
			$this->layout="admin";
		}else{
			$this->layout="list";
		}

		
		$dataProvider=new CActiveDataProvider('FileLamaran',
			array(
				'criteria'=>array('condition'=>'id_people='.YII::app()->user->id),
				'sort'=>array('defaultOrder'=>'id DESC')
				)
			);
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FileLamaran('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FileLamaran']))
			$model->attributes=$_GET['FileLamaran'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FileLamaran the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FileLamaran::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FileLamaran $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='file-lamaran-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionLulus($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = "Diterima";
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = YII::app()->user->id;
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}	


	public function actionDiterima($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = "Diverifikasi";
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = YII::app()->user->id;
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
			// $this->redirect(array('test/create','loker'=>$model->lowongan_id,'lamaran'=>$model->id,'user'=>$model->id_people));
	}	

	public function actionDitolak($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = "Ditolak";
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = YII::app()->user->id;

		$lamaran = Yii::getPathOfAlias('webroot')."/lamaran/";
		if(!empty($model->file_lamaran)){
			unlink($lamaran.$model->file_lamaran);
		}	

		if($model->update()){
			$this->redirect(array('view','id'=>$model->id));
		}
	}	

	public function actionDibatalkan($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = "Dibatalkan";
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = YII::app()->user->id;
		if($model->update()){
			$this->redirect(array('view','id'=>$model->id));
		}
	}	

}
