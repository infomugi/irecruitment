<?php

class PelamarController extends Controller
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
				'actions'=>array('profile','update','view','password'),
				'users'=>array('@'),
				),
			array('allow',
				'actions'=>array('create','update','view','delete'),
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
		$criteria = new CDbCriteria;
		$criteria->condition = 'people_id = :id';
		$criteria->params = array(':id'=>$id);
		$criteria->order = 'tahun_lulus DESC';		

		$dataProvider=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria2 = new CDbCriteria;
		$criteria2->condition = 'people_id = :id';
		$criteria2->params = array(':id'=>$id);
		$criteria2->order = 'tahun DESC';			

		$dataJobs=new CActiveDataProvider('Pekerjaan',array(
			'criteria'=>$criteria2,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria3 = new CDbCriteria;
		$criteria3->condition = 'people_id = :id';
		$criteria3->params = array(':id'=>$id);
		$criteria3->order = 'tahun DESC';			

		$dataFamily=new CActiveDataProvider('Keluarga',array(
			'criteria'=>$criteria3,
			'pagination'=>array(
				'pageSize'=>'4',
				)));		

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dataProvider'=>$dataProvider,
			'dataJobs'=>$dataJobs,
			'dataFamily'=>$dataFamily,
			));
	}

	public function actionProfile()
	{
		$profile=$this->loadProfile(Yii::app()->user->id);
		$dataKeahlian=$this->loadKeahlian(Yii::app()->user->id);
		
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :id AND jenis=1';
		$criteria->params = array(':id'=>Yii::app()->user->id);
		$criteria->order = 'tahun_lulus DESC';		

		$dataFormal=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria1 = new CDbCriteria;
		$criteria1->condition = 'user_id = :id AND jenis=2';
		$criteria1->params = array(':id'=>Yii::app()->user->id);
		$criteria1->order = 'tahun_lulus DESC';		

		$dataNonFormal=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria1,
			'pagination'=>array(
				'pageSize'=>'4',
				)));		

		$criteria2 = new CDbCriteria;
		$criteria2->condition = 'user_id = :id';
		$criteria2->params = array(':id'=>Yii::app()->user->id);
		$criteria2->order = 'tahun DESC';			

		$dataJobs=new CActiveDataProvider('Pekerjaan',array(
			'criteria'=>$criteria2,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria3 = new CDbCriteria;
		$criteria3->condition = 'user_id = :id';
		$criteria3->params = array(':id'=>Yii::app()->user->id);
		$criteria3->order = 'id_keluarga DESC';			

		$dataFamily=new CActiveDataProvider('Keluarga',array(
			'criteria'=>$criteria3,
			'pagination'=>array(
				'pageSize'=>'4',
				)));	

		$criteria4 = new CDbCriteria;
		$criteria4->condition = 'user_id = :id';
		$criteria4->params = array(':id'=>Yii::app()->user->id);
		$criteria4->order = 'id_bahasa DESC';			

		$dataBahasa=new CActiveDataProvider('Bahasa',array(
			'criteria'=>$criteria4,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria5 = new CDbCriteria;
		$criteria5->condition = 'user_id = :id';
		$criteria5->params = array(':id'=>Yii::app()->user->id);
		$criteria5->order = 'id_organisasi DESC';			

		$dataOrganisasi=new CActiveDataProvider('Organisasi',array(
			'criteria'=>$criteria5,
			'pagination'=>array(
				'pageSize'=>'4',
				)));							

		$this->render('profile',array(
			'model'=>$this->loadProfile(YII::app()->user->id),
			'dataFormal'=>$dataFormal,
			'dataNonFormal'=>$dataNonFormal,
			'dataJobs'=>$dataJobs,
			'dataFamily'=>$dataFamily,
			'dataBahasa'=>$dataBahasa,
			'dataOrganisasi'=>$dataOrganisasi,
			'dataKeahlian'=>$dataKeahlian,
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
		$user=$this->loadUser($model->id_user);
		$model->setScenario('update_pelamar');
		$user->setScenario('update_user');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User'],$_POST['Pelamar']))
		{
			$model->attributes=$_POST['Pelamar'];
			$user->attributes=$_POST['User'];
			$user->password = md5($user->password);
			if($model->save() && $user->save()){
				if(Yii::app()->user->getLevel()==1){
					$this->redirect(array('view','id'=>$model->id_people));
				}else{
					$this->redirect(array('profile'));
				}
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'user'=>$user,
			));
	}

	public function actionPassword($id)
	{
		$model=$this->loadModel($id);
		$user=$this->loadUser($model->id_user);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$user->attributes=$_POST['User'];
			$user->password = md5($user->password);
			if($model->save()){
				$this->redirect(array('profile'));
			}
		}

		$this->render('password',array(
			'model'=>$model,
			'user'=>$user,
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
		$dataProvider=new CActiveDataProvider('Pelamar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pelamar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pelamar']))
			$model->attributes=$_GET['Pelamar'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pelamar the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pelamar::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadUser($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadProfile($id)
	{
		$model=Pelamar::model()->findByAttributes(array('id_user'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		


	public function loadKeahlian($id)
	{
		$model=Keahlian::model()->findByAttributes(array('user_id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		



	/**
	 * Performs the AJAX validation.
	 * @param Pelamar $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pelamar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
