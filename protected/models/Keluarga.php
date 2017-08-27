<?php

/**
 * This is the model class for table "pelamar_keluarga".
 *
 * The followings are the available columns in table 'pelamar_keluarga':
 * @property integer $id_keluarga
 * @property integer $hubungan_keluarga
 * @property string $nama
 * @property integer $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property integer $pendidikan_terakhir
 * @property integer $pekerjaan
 * @property string $nama_perusahaan
 * @property string $keterangan
 * @property integer $people_id
 * @property integer $user_id
 */
class Keluarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_keluarga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hubungan_keluarga, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, pendidikan_terakhir, keterangan, user_id', 'required'),
			array('hubungan_keluarga, jenis_kelamin, pendidikan_terakhir, people_id, user_id', 'numerical', 'integerOnly'=>true),
			array('nama, tempat_lahir, nama_perusahaan', 'length', 'max'=>50),
			array('pekerjaan', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_keluarga, hubungan_keluarga, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, pendidikan_terakhir, pekerjaan, nama_perusahaan, keterangan, user_id', 'safe', 'on'=>'search'),
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
			'Jabatan'=>array(self::BELONGS_TO,'Jabatan','pekerjaan'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_keluarga' => 'Id Keluarga',
			'hubungan_keluarga' => 'Hubungan Keluarga',
			'nama' => 'Nama',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'pendidikan_terakhir' => 'Pendidikan Terakhir',
			'pekerjaan' => 'Pekerjaan',
			'nama_perusahaan' => 'Nama Perusahaan',
			'keterangan' => 'Keterangan',
			'people_id' => 'People',
			'user_id' => 'User',
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

		$criteria->compare('id_keluarga',$this->id_keluarga);
		$criteria->compare('hubungan_keluarga',$this->hubungan_keluarga);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('pendidikan_terakhir',$this->pendidikan_terakhir);
		$criteria->compare('pekerjaan',$this->pekerjaan);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('people_id',$this->people_id);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Keluarga the static model class
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

	public function relationship_family($data){
		if($data==1){
			return "Ayah";
		}else if($data==2){
			return "Ibu";
		}else if($data==3){
			return "Anak";
		}else if($data==4){
			return "Suami";
		}else{
			return "Istri";
		}
	}

	public function gender($data){
		if($data==1){
			return "Laki-Laki";
		}else if($data==2){
			return "Perempuan";
		}else{
			return "-";
		}
	}

	public function school($data){
		if($data==1){
			return "SD";
		}else if($data==2){
			return "SMP";
		}else if($data==3){
			return "SMA";
		}else if($data==4){
			return "D1/D3";
		}else if($data==5){
			return "S1";
		}else if($data==6){
			return "S2";
		}else if($data==7){
			return "S3";
		}else{
			return "-";
		}
	}
}
