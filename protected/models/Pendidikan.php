<?php

/**
 * This is the model class for table "pelamar_pendidikan".
 *
 * The followings are the available columns in table 'pelamar_pendidikan':
 * @property integer $id_pendidikan
 * @property integer $jenjang
 * @property string $instansi
 * @property string $kota
 * @property string $jurusan
 * @property string $mulai
 * @property string $selesai
 * @property string $tahun_lulus
 * @property integer $status
 * @property double $nilai
 * @property integer $jenis
 * @property integer $people_id
 * @property integer $user_id
 */
class Pendidikan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_pendidikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenjang, kota, mulai, selesai, status, jenis', 'required'),
			array('jenjang, status, jenis, people_id, user_id', 'numerical', 'integerOnly'=>true),
			array('nilai', 'numerical'),
			array('instansi', 'length', 'max'=>100),
			array('kota, jurusan', 'length', 'max'=>50),
			array('tahun_lulus', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pendidikan, jenjang, instansi, kota, jurusan, mulai, selesai, tahun_lulus, status, nilai, jenis, people_id, user_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pendidikan' => 'Id Pendidikan',
			'jenjang' => 'Jenjang',
			'instansi' => 'Instansi',
			'kota' => 'Kota',
			'jurusan' => 'Jurusan',
			'mulai' => 'Mulai',
			'selesai' => 'Selesai',
			'tahun_lulus' => 'Tahun Lulus',
			'status' => 'Status',
			'nilai' => 'Nilai',
			'jenis' => 'Jenis',
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

		$criteria->compare('id_pendidikan',$this->id_pendidikan);
		$criteria->compare('jenjang',$this->jenjang);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('mulai',$this->mulai,true);
		$criteria->compare('selesai',$this->selesai,true);
		$criteria->compare('tahun_lulus',$this->tahun_lulus,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('nilai',$this->nilai);
		$criteria->compare('jenis',$this->jenis);
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
	 * @return Pendidikan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
