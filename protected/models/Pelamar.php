<?php

/**
 * This is the model class for table "pelamar".
 *
 * The followings are the available columns in table 'pelamar':
 * @property integer $id_people
 * @property integer $nik
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
 * @property string $tanggal_menikah
 * @property string $no_jamsostek
 * @property string $no_sim
 * @property string $no_npwp
 * @property string $telephone_pribadi
 * @property string $telephone_rumah
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
			array('nama, nik', 'required','on'=>'register_pelamar'),
			array('nik','unique'),
			array('nama, nik, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, golongan_darah, kewarganegaraan, hp, kota_id, provinsi_id', 'required','on'=>'update_pelamar'),
			array('id_people, id_user, kota_id, provinsi_id, nik, status_menikah, status_domisili', 'numerical', 'integerOnly'=>true),
			array('nama, tanggal_lahir, nik, no_jamsostek, no_sim, no_npwp, alamat_domisili, telephone_pribadi, telephone_rumah', 'length', 'max'=>255),
			array('tempat_lahir, tanggal_lahir, agama, jenis_kelamin, golongan_darah, kewarganegaraan, hp', 'length', 'max'=>30),
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
			'hp' => 'HP',
			'no_jamsostek' => 'No. JAMSOSTEK',
			'no_sim' => 'No. SIM',
			'no_npwp' => 'No. NPWP',
			'kontak' => 'Kontak',
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
		$this->tanggal_menikah = date('d-m-Y', strtotime($this->tanggal_menikah));
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

}
