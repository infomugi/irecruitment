<?php

class LowonganController extends Controller
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
				'actions'=>array('index','view','detail','terbaru'),
				'users'=>array('*'),
				),
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','view','terbaru','list','listreport'),
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
		$dataNilai=new CActiveDataProvider('PenilaianSaw',
			array('criteria'=>
				array('condition'=>'lowongan_id='.$model->id_lowongan.'','order'=>'id_penilaian_saw DESC')
				)
			);

		// $dataProvider=new CActiveDataProvider('FileLamaran',
		// 	array('criteria'=>array(
		// 		'condition'=>'lowongan_id="'.$model->id_lowongan.'"',
		// 		'order'=>'id DESC',

		// 		),'pagination'=>array('pageSize'=>'4')
		// 	));

		$dataUnverify=new FileLamaran('search');
		$dataUnverify->unsetAttributes();  // clear any default values
		if(isset($_GET['FileLamaran']))
			$dataUnverify->attributes=$_GET['FileLamaran'];

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataUnverify'=>$dataUnverify,
			'dataNilai'=>$dataNilai,
			));
	}


	public function actionDetail($id)
	{
		$this->render('detail',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Lowongan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lowongan']))
		{
			$model->attributes=$_POST['Lowongan'];
			$model->tanggal = date('Y-m-d h:m:s');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_lowongan));
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

		if(isset($_POST['Lowongan']))
		{
			$model->attributes=$_POST['Lowongan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_lowongan));
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
		$this->layout="list";
		$dataProvider=new CActiveDataProvider('Lowongan',array('criteria'=>array('order'=>'id_lowongan DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Lowongan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lowongan']))
			$model->attributes=$_GET['Lowongan'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Lowongan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Lowongan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Lowongan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lowongan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionTerbaru()
	{
		$this->layout="list";
		$dataProvider=new CActiveDataProvider('Lowongan',array('criteria'=>array('order'=>'id_lowongan DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionList()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('Lowongan',array('criteria'=>array('order'=>'id_lowongan DESC')));
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
			));
	}


	public function actionListReport()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('Lowongan',array('criteria'=>array('order'=>'id_lowongan DESC')));
		$this->render('list_report',array(
			'dataProvider'=>$dataProvider,
			));
	}	

}
