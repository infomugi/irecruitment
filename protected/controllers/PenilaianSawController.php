<?php

class PenilaianSawController extends Controller
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
				'actions'=>array('print','listlaporan'),
				'users'=>array('@'),
				),			
			array('allow', 
				'actions'=>array('create','update','index','view','admin','view','delete','perhitungan','perhitunganahp','pegawai','verifikasi'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow', 
				'actions'=>array('index','view','admin','perhitungan','listterima','listpending','listtolak','listverifikasi','verifikasi','terima','pending','tolak'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),			
			array('allow', 
				'actions'=>array('create','update','index','view','admin','view','delete','perhitungan','perhitunganahp','pegawai','verifikasi'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
				),			
			array('deny',  // deny all users
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new PenilaianSaw;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenilaianSaw']))
		{
			$model->attributes=$_POST['PenilaianSaw'];
			$model->penilai_id = YII::app()->user->id;
			$model->customer_id = $id;
			$model->tanggal = date('Y-m-d');
			$model->penilai_id = YII::app()->user->id;
			$model->status = 0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_penilaian_saw));
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}


	public function actionPegawai($id)
	{
		$model=new PenilaianSaw;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenilaianSaw']))
		{
			$model->attributes=$_POST['PenilaianSaw'];
			$model->tanggal = date('Y-m-d');
			$model->penilai_id = YII::app()->user->id;
			$model->customer_id = $id;
			$model->status = 0;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_penilaian_saw));
		}

		$this->render('nilai',array(
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

		if(isset($_POST['PenilaianSaw']))
		{
			$model->attributes=$_POST['PenilaianSaw'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_penilaian_saw));
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
		$dataProvider=new CActiveDataProvider('PenilaianSaw');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}


	public function actionPerhitungan()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw');
		$dataNilai=new CActiveDataProvider('PenilaianSaw');
		$this->render('perhitungan',array(
			'dataProvider'=>$dataProvider,
			'dataNilai'=>$dataNilai,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout="admin";
		$model=new PenilaianSaw('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PenilaianSaw']))
			$model->attributes=$_GET['PenilaianSaw'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PenilaianSaw the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PenilaianSaw::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PenilaianSaw $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='penilaian-saw-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionVerifikasi($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('verifikasi');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenilaianSaw']))
		{
			$model->attributes=$_POST['PenilaianSaw'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_penilaian_saw));
			}else{
				throw new CHttpException(404,'Gagal menyimpan data.');
				
			}
		}

		$this->render('verifikasi',array(
			'model'=>$model,
			));
	}

	public function actionListVerifikasi()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',array('criteria'=>array('condition'=>'status=0','order'=>'nilai DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionListTerima()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',array('criteria'=>array('condition'=>'status=1','order'=>'nilai DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionListPending()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',array('criteria'=>array('condition'=>'status=2','order'=>'nilai DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionListTolak()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',array('criteria'=>array('condition'=>'status=3','order'=>'nilai DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	public function actionTerima($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('verifikasi');
		$model->status = 1;
		$model->save();
		$this->redirect(array('view','id'=>$model->id_penilaian_saw));	
	}	

	public function actionPending($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('verifikasi');
		$model->status = 2;
		$model->save();
		$this->redirect(array('view','id'=>$model->id_penilaian_saw));	
	}	

	public function actionTolak($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('verifikasi');
		$model->status = 3;
		$model->save();
		$this->redirect(array('view','id'=>$model->id_penilaian_saw));	
	}		

	public function actionPrint($id)
	{
		$this->layout = "print";
		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}

	public function actionListLaporan()
	{
		$this->layout = "print";
		$dataProvider=new CActiveDataProvider('PenilaianSaw',array('criteria'=>array('condition'=>'status=1','order'=>'nilai DESC')));
		$this->render('laporan',array(
			'dataProvider'=>$dataProvider,
			));
	}		


}
