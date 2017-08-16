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
		$dataDokumen=$this->loadDokumen($model->id_people);
		$dataProfile=$this->loadPelamar($model->id_people);

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
			'dataDokumen'=>$dataDokumen,
			'dataProfile'=>$dataProfile,
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

		$pelamar=$this->loadPelamar($user);
		$pelamar->lowongan_id = $job;
		$pelamar->lamaran_id = $user;
		$pelamar->user_id = $user;
		$pelamar->save();

		$this->redirect(array('history'));
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
			'pageTitle'=>"Belum di Verifikasi",
			));
	}	

	public function actionVerified()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Diverifikasi"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'title'=>"Diverifikasi",
			));
	}	

	public function actionAccept()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Diterima"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'title'=>"Diterima",
			));
	}		

	public function actionReject()
	{
		$this->layout="admin";
		$dataProvider=new CActiveDataProvider('FileLamaran',array('criteria'=>array('condition'=>'status_lamaran="Ditolak"'), 'sort'=>array('defaultOrder'=>'id DESC')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'title'=>"Ditolak",
			));
	}				

	public function actionHistory()
	{
		if(Yii::app()->user->getLevel()==1){
			$this->layout="admin";
		}else{
			$this->layout="main";
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

	public function loadPelamar($id)
	{
		$model=Pelamar::model()->findByAttributes(array('id_user'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}		

	public function loadDokumen($id)
	{
		$model=Dokumen::model()->findByAttributes(array('user_id'=>$id));
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
