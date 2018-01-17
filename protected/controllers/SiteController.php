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
	public function actionIndex($find='')
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$criteria = new CDbCriteria();
		if(strlen($find)>0)
			$criteria->addSearchCondition('deskripsi_pekerjaan', $find, true, 'OR');
		$criteria->addSearchCondition('deskripsi_kebutuhan', $find, true, 'OR');
		$criteria->order = "tanggal_kebutuhan DESC";
		$criteria->condition = "status=1";
		$dataProvider=new CActiveDataProvider('Lowongan', array('criteria'=>$criteria),array('pagination'=>array(
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

		$this->performAjaxValidation(array($model));
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				if(Yii::app()->user->getLevel()==1){
					$this->redirect(Yii::app()->homeUrl);
				}else if(Yii::app()->user->getLevel()==2){
					$this->redirect(array('pelamar/profile'));
				}else if(Yii::app()->user->getLevel()==5){
					$this->redirect(array('lowongan/admin'));
				}else{
					$this->redirect(Yii::app()->homeUrl);
				}
			}
		// display the login form
			$this->render('login',array('model'=>$model));
		}

	/**
	 * Displays the register page
	 */
	public function actionPencaker()
	{
		$this->layout="signin";	
		$model=new User;
		$Pelamar=new Pelamar;
		$keahlian=new Keahlian;
		$dokumen=new Dokumen;
		$model->setScenario('register_user');
		$Pelamar->setScenario('register_pelamar');
		$dokumen->setScenario('register_dokumen');

		$this->performAjaxValidation(array($model,$Pelamar));
		if(isset($_POST['User'],$_POST['Pelamar']))
		{
			$model->attributes=$_POST['User'];
			$Pelamar->attributes=$_POST['Pelamar'];
			$valid=$model->validate();
			$valid=$Pelamar->validate() && $valid;
			$model->image = "avatar.png";
			$model->date_create = date('Y-m-d h:i:s');
			$model->password = md5($model->password);
			if($valid)
			{
				if($model->save(false)){
					$Pelamar->id_people = $model->id_user;
					$Pelamar->id_user = $model->id_user;

					// {
					// 	"STATUS": "1",
					// 	"DESCSTATUS": "DATA DITEMUKAN",
					// 	"NIK": 3175025505850025,
					// 	"NO_KK": 3175021001095768,
					// 	"NAMA_LGKP": "WILDA RISDAMAYANTI",
					// 	"JENIS_KLMIN": "PEREMPUAN",
					// 	"TMPT_LHR": "JAKARTA",
					// 	"TGL_LHR": "15.05.1985",
					// 	"NO_AKTA_LHR": null,
					// 	"ALAMAT": "JL.SAWO V NO.8",
					// 	"NO_RT": 11,
					// 	"NO_RW": 8,
					// 	"KEL_NAME": "RAWAMANGUN",
					// 	"NO_KEL": 1005,
					// 	"KEC_NAME": "PULOGADUNG",
					// 	"NO_KEC": 2,
					// 	"KAB_NAME": "KOTA ADM. JAKARTA TIMUR",
					// 	"NO_KAB": 75,
					// 	"PROP_NAME": "DKI JAKARTA",
					// 	"NO_PROP": 31,
					// 	"KODE_POS": null,
					// 	"DUSUN": null,
					// 	"AGAMA": "ISLAM",
					// 	"GOL_DARAH": "TIDAK TAHU",
					// 	"JENIS_PKRJN": "KARYAWAN SWASTA",
					// 	"PDDK_AKH": "DIPLOMA IV/STRATA I",
					// 	"STATUS_KAWIN": "BELUM KAWIN",
					// 	"TGL_KWN": null,
					// 	"NO_AKTA_KWN": null,
					// 	"STAT_HBKEL": "ANAK",
					// 	"TGL_CRAI": null,
					// 	"NO_AKTA_CRAI": null,
					// 	"PNYDNG_CCT": null,
					// 	"NAMA_LGKP_AYAH": "ARI BUCHARI ",
					// 	"NAMA_LGKP_IBU": "ESSYNAMURNI ",
					// 	"EKTP_STATUS": "TUNGGAL"
					// }
					// 
					$url = "https://devinfokerja.kemnaker.go.id/tools/check_nik/".$Pelamar->nik;
					$json = file_get_contents($url);
					$data = json_decode($json);

					if($data->STATUS==1){

						$Pelamar->nama = $data->NAMA_LGKP;
						// $Pelamar->no_kk = $data->NO_KK;
						$Pelamar->kewarganegaraan = 1;
						$Pelamar->jenis_kelamin = $data->JENIS_KLMIN == "PEREMPUAN" ? "P" : "L";
						$Pelamar->agama = Pelamar::model()->getReligion($data->AGAMA);
						$Pelamar->tempat_lahir = $data->TMPT_LHR;
						$Pelamar->tanggal_lahir = str_replace('.', '-', $data->TGL_LHR);;
						$Pelamar->status_menikah = $data->STATUS_KAWIN == "BELUM KAWIN" ? "2" : "1";
						$Pelamar->alamat_domisili = $data->ALAMAT . ", Desa " . $data->KEL_NAME . ", Kec. " . $data->KEC_NAME . ", Kab. " . $data->KAB_NAME . ", Provinsi " . $data->PROP_NAME;
						$Pelamar->jenjang = $data->PDDK_AKH == "SLTA\/SEDERAJAT" ? "1" : "2";
						$Pelamar->provinsi_id = $data->NO_PROP;
						$Pelamar->kota_id = $data->NO_KAB;
						$Pelamar->kecamatan_id = $data->NO_KEC;
						$Pelamar->kelurahan_id = $data->NO_KEL;
						$Pelamar->kecamatan = $data->KEC_NAME;
						$Pelamar->kelurahan = $data->KEL_NAME;
						$Pelamar->rt = $data->NO_RT;
						$Pelamar->rw = $data->NO_RW;
						$Pelamar->kode_pos = $data->KODE_POS;
						$Pelamar->save();

					}

					$keahlian->people_id = $Pelamar->id_people;
					$keahlian->user_id = $Pelamar->id_user;
					$keahlian->save();
					
					$dokumen->people_id = $Pelamar->id_people;
					$dokumen->user_id = $Pelamar->id_user;
					$dokumen->status = 0;
					$dokumen->tanggal = date('Y-m-d h:i:s');
					$dokumen->save(false);

					Yii::app()->user->setFlash('success', 'Hi <b>'.ucwords($model->username).'</b>, registrasi telah berhasil, selanjutnya silahkan <b>Login</b> dan <b>Perbaharui Profil Data Pribadi</b>.');

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

	/**
	 * Displays the register page
	 */
	public function actionPerusahaan()
	{
		$this->layout="signin";	
		$model=new User;
		$hrd=new Hrd;
		$perusahaan=new Perusahaan;
		$model->setScenario('register_user');
		$hrd->setScenario('register_hrd');

		$this->performAjaxValidation(array($model,$hrd));
		if(isset($_POST['User'],$_POST['Hrd']))
		{
			$model->attributes=$_POST['User'];
			$hrd->attributes=$_POST['Hrd'];

			$valid = $model->validate();
			$valid = $hrd->validate() && $valid;

			$model->image = "avatar.png";
			$model->date_create = date('Y-m-d h:i:s');
			$model->password = md5($model->password);
			$model->level_ID = 3;


			if($valid)
			{
				if($model->save(false)){
					$hrd->id_hrd = $model->id_user;
					$hrd->id_user = $model->id_user;

					$url = "https://devinfokerja.kemnaker.go.id/tools/check_nik/".$hrd->nik;
					$json = file_get_contents($url);
					$data = json_decode($json);

					$hrd->nama = $data->NAMA_LGKP;
					$hrd->kewarganegaraan = 1;
					$hrd->jenis_kelamin = $data->JENIS_KLMIN == "PEREMPUAN" ? "P" : "L";
					$hrd->agama = Pelamar::model()->getReligion($data->AGAMA);
					$hrd->tempat_lahir = $data->TMPT_LHR;
					$hrd->tanggal_lahir = str_replace('.', '-', $data->TGL_LHR);;
					$hrd->alamat_domisili = $data->ALAMAT . ", Desa/ Kel. " . $data->KEL_NAME . ", Kec. " . $data->KEC_NAME . ", Kota/ Kab. " . $data->KAB_NAME . ", Provinsi " . $data->PROP_NAME;

					$hrd->jenjang = $data->PDDK_AKH == "SLTA\/SEDERAJAT" ? "2" : "1";
					$hrd->provinsi_id = $data->NO_PROP;
					$hrd->kota_id = $data->NO_KAB;
					$hrd->kecamatan_id = $data->NO_KEC;
					$hrd->kelurahan_id = $data->NO_KEL;
					$hrd->kecamatan = $data->KEC_NAME;
					$hrd->kelurahan = $data->KEL_NAME;
					$hrd->rt = $data->NO_RT;
					$hrd->rw = $data->NO_RW;
					$hrd->kode_pos = $data->KODE_POS;
					$hrd->save();

					
					$perusahaan->user_id=$model->id_user;
					$perusahaan->created_date=date('Y-m-d h:i:s');
					$perusahaan->status=0;
					$perusahaan->save();

					Yii::app()->user->setFlash('success', 'Hi <b>'.ucwords($model->username).'</b>, registrasi telah berhasil, selanjutnya silahkan <b>Login</b> dan <b>Perbaharui Profil Data Pribadi</b>.');

					$this->redirect(array('site/login'));
				}
			}
		}

		$this->render('register_perusahaan',array(
			'model'=>$model,
			'hrd'=>$hrd,
			));
	}		
}