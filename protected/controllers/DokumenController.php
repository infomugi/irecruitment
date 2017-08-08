<?php

class DokumenController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('uploadcv','uploadktp','uploadijazah','uploadtranskrip','uploadskck','uploadsertifikat'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),			
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index'),
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
		if(Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Dokumen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_dokumen));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_dokumen));
		}

		$this->render('update',array(
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
		$dataProvider=new CActiveDataProvider('Dokumen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dokumen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dokumen']))
			$model->attributes=$_GET['Dokumen'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dokumen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dokumen::model()->findByAttributes(array('people_id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dokumen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dokumen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$this->redirect(array('index'));
	}	

	public function actionDisable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->redirect(array('index'));
	}			

	public function actionUploadCV($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_cv');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->cv=CUploadedFile::getInstance($model,'cv');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'cv'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'cv'); 
				$model->cv=$model->user_id." - CV Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->cv)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/cv/'.$model->cv);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_cv',array(
			'model'=>$model,
			));
	}

	public function actionUploadKTP($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_ktp');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->ktp=CUploadedFile::getInstance($model,'ktp');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'ktp'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'ktp'); 
				$model->ktp=$model->user_id." - KTP Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->ktp)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/ktp/'.$model->ktp);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_ktp',array(
			'model'=>$model,
			));
	}

	public function actionUploadIjazah($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_ijazah');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->ijazah=CUploadedFile::getInstance($model,'ijazah');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'ijazah'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'ijazah'); 
				$model->ijazah=$model->user_id." - Ijazah Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->ijazah)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/ijazah/'.$model->ijazah);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_ijazah',array(
			'model'=>$model,
			));
	}	

	public function actionUploadTranskrip($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_transkrip');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->transkrip=CUploadedFile::getInstance($model,'transkrip');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'transkrip'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'transkrip'); 
				$model->transkrip=$model->user_id." - Transkrip Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->transkrip)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/transkrip/'.$model->transkrip);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_transkrip',array(
			'model'=>$model,
			));
	}	

	public function actionUploadSkck($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_skck');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->skck=CUploadedFile::getInstance($model,'skck');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'skck'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'skck'); 
				$model->skck=$model->user_id." - SKCK Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->skck)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/skck/'.$model->skck);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_skck',array(
			'model'=>$model,
			));
	}	

	public function actionUploadSertifikat($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('upload_sertifikat');

		if(isset($_POST['Dokumen']))
		{
			$model->attributes=$_POST['Dokumen'];
			$model->tanggal = date('Y-m-d h:i:s');
			$model->sertifikat=CUploadedFile::getInstance($model,'sertifikat');
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'sertifikat'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'sertifikat'); 
				$model->sertifikat=$model->user_id." - Sertifikat Lamaran - ".$model->people_id.'.'.$tmp->extensionName; 
			}

			if($model->update()){
				if(strlen(trim($model->sertifikat)) > 0) 
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/lamaran/sertifikat/'.$model->sertifikat);				
				$this->redirect(array('pelamar/profile'));
			}
		}

		$this->render('upload_sertifikat',array(
			'model'=>$model,
			));
	}			


}
