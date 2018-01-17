<?php

/**
 * This is the model class for table "pelamar".
 *
 * The followings are the available columns in table 'pelamar':
 * @property integer $id_people
 * @property string $nik
 * @property string $no_kk
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property integer $agama
 * @property integer $jenis_kelamin
 * @property integer $golongan_darah
 * @property integer $kewarganegaraan
 * @property integer $id_user
 * @property integer $kota_id
 * @property integer $provinsi_id
 * @property string $hp
 * @property string $alamat_domisili
 * @property integer $status_domisili
 * @property integer $status_menikah
 * @property integer $rt
 * @property integer $rw
 * @property string $tanggal_menikah
 * @property string $no_jamsostek
 * @property string $no_sim
 * @property string $no_npwp
 * @property string $telephone_pribadi
 * @property string $telephone_rumah
 * @property integer $lowongan_id
 * @property integer $lamaran_id
 */
class Pelamar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $province_id;
	public function tableName()
	{
		return 'pelamar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hp, nik', 'required','on'=>'register_pelamar'),
			array('nik','unique','on'=>'register_pelamar'),
			array('nama, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, golongan_darah, kewarganegaraan, hp, kota_id, provinsi_id, jenjang, nilai', 'required','on'=>'update_pelamar'),
			array('id_people, id_user, kota_id, provinsi_id, kecamatan_id, kelurahan_id, nik, status_menikah, status_domisili, lamaran_id, lowongan_id, jenjang', 'numerical', 'integerOnly'=>true),
			array('nama, tanggal_lahir, no_jamsostek, no_sim, no_npwp, alamat_domisili, telephone_pribadi, telephone_rumah, tanggal_lahir, alamat_domisili', 'length', 'max'=>255),
			array('tempat_lahir, tanggal_lahir, agama, jenis_kelamin, golongan_darah, kewarganegaraan, hp, status_domisili, jenjang, nilai', 'length', 'max'=>30),
			array('kecamatan, kelurahan, no_kk', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_people, nama, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, golongan_darah, kewarganegaraan, id_user', 'safe', 'on'=>'search'),
			);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Kota' => array(self::BELONGS_TO, 'Kota', 'kota_id'),
			'Provinsi' => array(self::BELONGS_TO, 'Provinsi', 'provinsi_id'),
			'Lowongan' => array(self::BELONGS_TO, 'Lowongan', 'lowongan_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_people' => 'Id People',
			'nik' => 'No. KTP',
			'nok_kk' => 'No. KK',
			'nama' => 'Nama Lengkap',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
			'jenis_kelamin' => 'Jenis Kelamin',
			'golongan_darah' => 'Golongan Darah',
			'kewarganegaraan' => 'Kewarganegaraan',
			'id_user' => 'Id User',
			'kota_id' => 'Kota',
			'provinsi_id' => 'Provinsi',
			'kecamatan_id' => 'Kecamatan',
			'kelurahan_id' => 'Kelurahan',
			'kecamatan' => 'Kecamatan',
			'kelurahan' => 'Kelurahan',
			'hp' => 'HP',
			'no_jamsostek' => 'No. JAMSOSTEK',
			'no_sim' => 'No. SIM',
			'no_npwp' => 'No. NPWP',
			'kontak' => 'Kontak',
			'lowongan_id' => 'Lowongan',
			'lamaran_id' => 'Lamaran',
			'nilai' => 'Nilai / IPK Terakhir',
			'jenjang' => 'Pendidikan Terakhir',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_people',$this->id_people);
		$criteria->compare('nik',$this->nik);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('golongan_darah',$this->golongan_darah);
		$criteria->compare('kewarganegaraan',$this->kewarganegaraan);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('kota_id',$this->kota_id);
		$criteria->compare('provinsi_id',$this->provinsi_id);
		$criteria->compare('hp',$this->hp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelamar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_lahir = date('Y-m-d', strtotime($this->tanggal_lahir));
		$this->tanggal_menikah = date('Y-m-d', strtotime($this->tanggal_menikah));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_lahir = date('d-m-Y', strtotime($this->tanggal_lahir));
		if($this->tanggal_menikah==NULL){
			return "-";
		}else{
			$this->tanggal_menikah = date('d-m-Y', strtotime($this->tanggal_menikah));
		}
		return TRUE;
	}

	public function countBirth($countBirth)
	{
		$diff = abs(strtotime(date('Y-m-d')) - strtotime($countBirth));
		return $years = floor($diff / (365*60*60*24));
	}	

	public function domisili($data){
		if($data==1){
			return "Milik Sendiri";
		}elseif($data==2){
			return "Milik Orangtua";
		}elseif($data==3){
			return "Kontrak";
		}elseif($data==4){
			return "Kost";
		}else{
			return "Lainnya";
		}
	}	

	public function menikah($data){
		if($data==1){
			return "Sudah Menikah";
		}else{
			return "Belum Menikah";
		}
	}		


	public function jenjang($data){
		if($data==1){
			return "Diploma / Sarjana";
		}else{
			return "SMA / SMK";
		}
	}		


	public static function getApplicant(){
		$sql = "
		SELECT * FROM pelamar as p LEFT JOIN user u ON u.id_user=p.id_user  ORDER BY p.id_people DESC LIMIT 3";
		$command = YII::app()->db->createCommand($sql);
		return $command->queryAll();
	}

	public function applicant($id){
		$model=Pelamar::model()->findByAttributes(array('id_user'=>$id));
		if($model===null){
			return "-";
		}else{
			return $model->id_people;
		}
	}

	public function getIdentity($id){
		$model=Pelamar::model()->findByAttributes(array('id_user'=>$id));
		if($model===null){
			return "-";
		}else{
			return $model;
		}
	}

	public function getNik($id){
		$url = "https://devinfokerja.kemnaker.go.id/tools/check_nik/".$id."";
		$json = file_get_contents($url);
		$json = json_decode($json);
		return $json->NAMA_LGKP;
	}

	public function getReligion($data){
		if($data=="ISLAM"){
			return "1";
		}elseif($data=="KRISTEN"){
			return "2";
		}elseif($data=="HINDU"){
			return "3";
		}elseif($data=="BUDHA"){
			return "4";
		}else{
			return "-";
		}
	}

	public function religion($data){
		if($data==1){
			return "Islam";
		}elseif($data==2){
			return "Kristen";
		}elseif($data==3){
			return "Hindu";
		}elseif($data==4){
			return "Budha";
		}else{
			return "-";
		}
	}


	public function getNational($data){
		if($data=="WNI"){
			return "1";
		}elseif($data=="WNA"){
			return "2";
		}else{
			return "-";
		}
	}	


	public function national($data){
		if($data=="1"){
			return "WNI";
		}elseif($data=="2"){
			return "WNA";
		}else{
			return "-";
		}
	}		

}
