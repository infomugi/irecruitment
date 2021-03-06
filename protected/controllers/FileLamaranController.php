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
				'actions'=>array(
					'create','update','view','delete','admin','index','history','diterima','ditolak','unverified','verified','reject','lulus','accept','call','uncall','lulus','tidaklulus', 'sudahdipanggil','panggilanditunda', 'verifikasi','tolak','rekomendasi','pemanggilan', 'search','getperiodic'
					),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('allow',
				'actions'=>array(
					'create','update','view','delete','admin','index','history','diterima','ditolak','unverified','verified','reject','lulus','accept','call','uncall','lulus','tidaklulus', 'sudahdipanggil','panggilanditunda', 'verifikasi','tolak','rekomendasi','pemanggilan', 'search'
					),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==5',
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
		$dataDokumen=$this->loadDokumen($model->user_id);
		$dataProfile=$this->loadPelamar($model->user_id);
		$model->setScenario('keterangan');

		if(isset($_POST['FileLamaran']))
		{
			$model->attributes=$_POST['FileLamaran'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}


		$profile=$this->loadPelamar($model->user_id);
		$dataKeahlian=$this->loadKeahlian($model->user_id);
		
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :id AND jenis=1';
		$criteria->params = array(':id'=>$model->user_id);
		$criteria->order = 'tahun_lulus DESC';		

		$dataFormal=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria1 = new CDbCriteria;
		$criteria1->condition = 'user_id = :id AND jenis=2';
		$criteria1->params = array(':id'=>$model->user_id);
		$criteria1->order = 'tahun_lulus DESC';		

		$dataNonFormal=new CActiveDataProvider('Pendidikan',array(
			'criteria'=>$criteria1,
			'pagination'=>array(
				'pageSize'=>'4',
				)));		

		$criteria2 = new CDbCriteria;
		$criteria2->condition = 'user_id = :id';
		$criteria2->params = array(':id'=>$model->user_id);
		$criteria2->order = 'tahun DESC';			

		$dataJobs=new CActiveDataProvider('Pekerjaan',array(
			'criteria'=>$criteria2,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria3 = new CDbCriteria;
		$criteria3->condition = 'user_id = :id';
		$criteria3->params = array(':id'=>$model->user_id);
		$criteria3->order = 'id_keluarga DESC';			

		$dataFamily=new CActiveDataProvider('Keluarga',array(
			'criteria'=>$criteria3,
			'pagination'=>array(
				'pageSize'=>'4',
				)));	

		$criteria4 = new CDbCriteria;
		$criteria4->condition = 'user_id = :id';
		$criteria4->params = array(':id'=>$model->user_id);
		$criteria4->order = 'id_bahasa DESC';			

		$dataBahasa=new CActiveDataProvider('Bahasa',array(
			'criteria'=>$criteria4,
			'pagination'=>array(
				'pageSize'=>'4',
				)));

		$criteria5 = new CDbCriteria;
		$criteria5->condition = 'user_id = :id';
		$criteria5->params = array(':id'=>$model->user_id);
		$criteria5->order = 'id_organisasi DESC';			

		$dataOrganisasi=new CActiveDataProvider('Organisasi',array(
			'criteria'=>$criteria5,
			'pagination'=>array(
				'pageSize'=>'4',
				)));			

		$this->render('view',array(
			'model'=>$model,
			'dataDokumen'=>$dataDokumen,
			'dataProfile'=>$dataProfile,
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionLamar($job,$user,$pelamar)
	{
		$model=new FileLamaran;
		$model->lowongan_id = $job;
		$model->user_id = $user;
		$model->pelamar_id = $pelamar;
		$model->tanggal_upload = date('Y-m-d h:i:s');
		$model->status_lamaran = 0;
		$model->save();

		$pelamar=$this->loadPelamar($user);
		$pelamar->lowongan_id = $job;
		$pelamar->lamaran_id = $user;
		$pelamar->id_user = $user;
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

	public function actionHistory()
	{
		$dataProvider=new CActiveDataProvider('FileLamaran',
			array(
				'criteria'=>array('condition'=>'user_id='.YII::app()->user->id),
				'sort'=>array('defaultOrder'=>'id DESC')
				)
			);
		$this->render('history',array(
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


	public function loadKeahlian($id)
	{
		$model=Keahlian::model()->findByAttributes(array('user_id'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	public function loadPenilaian($id)
	{
		$model=PenilaianSaw::model()->findByPk($id);
		// $model=PenilaianSaw::model()->findByAttributes(array('pelamar_id'=>$id));
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


	public function actionVerifikasi($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 1;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Lamaran Anda Telah Kami Verifikasi, Pada ".date('Y-m-d h:i:s')." Tahap Selanjutnya Pemanggilan.";
		if($model->update()){
			$this->redirect(array('view','id'=>$model->id));
		}
	}

	public function actionPemanggilan($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 2;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "HRD akan segera menghubungi anda, untuk mengkonfirmasi pemanggilan. , Terakhir Diverifikasi Pada ".date('Y-m-d h:i:s');
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}	


	public function actionSudahdiPanggil($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 3;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Telah dilakukan Pemanggilan untuk Tahap Selanjutnya Penilaian, Terakhir Diverifikasi Pada ".date('Y-m-d h:i:s');
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}			


	public function actionPanggilanDitunda($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 4;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}		

	public function actionDiterima($id,$penilaian)
	{
		$model=$this->loadModel($id);
		$model->penilaian_id = $penilaian;
		$model->status_lamaran = 5;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Selamat Anda Lulus Seleksi & Diterima Menjadi Karyawan, Terakhir Diverifikasi Pada ".date('Y-m-d h:i:s');
		if($model->update()){

			$value=$this->loadPenilaian($model->penilaian_id);
			$value->status = 1;
			$value->save();

			$pelamar=$this->loadPelamar($model->user_id);
			$pelamar->lowongan_id = 0;
			$pelamar->lamaran_id = 0;
			$pelamar->save();			

			$this->redirect(array('view','id'=>$model->id));
		}
	}		

	public function actionTolak($id,$penilaian)
	{
		$model=$this->loadModel($id);
		$model->penilaian_id = $penilaian;
		$model->status_lamaran = 9;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Maaf ".$model->Pelamar->nama.", Lamaran anda tidak dapat kami terima. Terimakasih telah mengikuti Seleksi ini. Anda dapat mencoba mengajukan lamaran lain. Terakhir Diverifikasi Pada ".date('Y-m-d h:i:s');
		if($model->update()){

			$pelamar=$this->loadPelamar($model->user_id);
			$pelamar->lowongan_id = 0;
			$pelamar->lamaran_id = 0;
			$pelamar->save();

			$this->redirect(array('view','id'=>$model->id));
		}
	}	

	public function actionLulus($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 8;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}		

	public function actionTidakLulus($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 9;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Maaf ".$model->Pelamar->nama.", Anda Gagal, Terimakasih telah mengikuti Seleksi ini. Anda dapat mencoba mengajukan lamaran lain. Terakhir Diverifikasi Pada ".date('Y-m-d h:i:s');
		if($model->update()){

			$pelamar=$this->loadPelamar($model->user_id);
			$pelamar->lowongan_id = 0;
			$pelamar->lamaran_id = 0;
			$pelamar->save();

			$this->redirect(array('view','id'=>$model->id));
		}
	}		

	public function actionRekomendasi($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 11;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		if($model->update())
			$this->redirect(array('view','id'=>$model->id));
	}			

	public function actionDibatalkan($id)
	{
		$model=$this->loadModel($id);
		$model->status_lamaran = 13;
		$model->tanggal_verifikasi = date('Y-m-d h:i:s');
		$model->verifikasi_id = $model->user_id;
		$model->keterangan = "Lamaran Anda Tidak Kami Proses, Anda sudah Membatalkan Lamaran ini Pada ".date('Y-m-d h:i:s');
		if($model->update()){

			$pelamar=$this->loadPelamar($model->user_id);
			$pelamar->lowongan_id = 0;
			$pelamar->lamaran_id = 0;
			$pelamar->save();

			$this->redirect(array('view','id'=>$model->id));
		}
	}	

	public function actionSearch($string=''){
		$criteria = new CDbCriteria();
		if(strlen($string)>0)
			$criteria->addSearchCondition('id', $string, true, 'OR');
		$dataProvider = new CActiveDataProvider('FileLamaran', array('criteria'=>$criteria));
		$this->render('index', array('dataProvider'=>$dataProvider));		
	}	


	public function actionGetPeriodic($month,$year)
	{
		$criteria = new CDbCriteria();
		$criteria->condition = "DATE_FORMAT(tanggal_upload,'%m')=:monthno AND DATE_FORMAT(tanggal_upload,'%Y')=:yearto";
		$criteria->params = array(':monthno'=> $month,':yearto'=> $year);
		$criteria->order = 'id DESC';		

		$dataProvider=new CActiveDataProvider('FileLamaran',array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>'100',
				)));

		$this->render('history',array(
			'dataProvider'=>$dataProvider,
			));
	}

}
