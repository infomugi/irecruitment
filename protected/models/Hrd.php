<?php

/**
 * This is the model class for table "pelamar".
 *
 * The followings are the available columns in table 'pelamar':
 * @property integer $id_hrd
 * @property string $nik
 * @property string $no_kk
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property integer $agama
 * @property integer $jenis_kelamin
 * @property integer $kewarganegaraan
 * @property integer $id_user
 * @property integer $kota_id
 * @property integer $provinsi_id
 * @property string $hp
 * @property string $alamat_domisili
 */
class Hrd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $province_id;
	public function tableName()
	{
		return 'hrd';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hp, nik', 'required','on'=>'register_hrd'),
			array('nik','unique','on'=>'register_hrd'),
			array('nama, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, kewarganegaraan, hp, kota_id, provinsi_id, jenjang', 'required','on'=>'update_pelamar'),
			array('id_hrd, id_user, kota_id, provinsi_id, kecamatan_id, kelurahan_id, nik', 'numerical', 'integerOnly'=>true),
			array('nama, tanggal_lahir, alamat_domisili, tanggal_lahir, alamat_domisili', 'length', 'max'=>255),
			array('tempat_lahir, tanggal_lahir, agama, jenis_kelamin, kewarganegaraan, hp, jenjang', 'length', 'max'=>30),
			array('kecamatan, kelurahan', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hrd, nama, tempat_lahir, tanggal_lahir, agama, jenis_kelamin, kewarganegaraan, id_user', 'safe', 'on'=>'search'),
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
			'id_hrd' => 'Kode HRD',
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
			'kecamatan_id' => 'Kecamatan',
			'kelurahan_id' => 'Kelurahan',
			'kecamatan' => 'Kecamatan',
			'kelurahan' => 'Kelurahan',
			'hp' => 'HP',
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

		$criteria->compare('id_hrd',$this->id_hrd);
		$criteria->compare('nik',$this->nik);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
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
	 * @return Hrd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->tanggal_lahir = date('Y-m-d', strtotime($this->tanggal_lahir));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->tanggal_lahir = date('d-m-Y', strtotime($this->tanggal_lahir));
		return TRUE;
	}

}
