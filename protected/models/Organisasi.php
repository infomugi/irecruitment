<?php

/**
 * This is the model class for table "pelamar_organisasi".
 *
 * The followings are the available columns in table 'pelamar_organisasi':
 * @property integer $id_organisasi
 * @property string $nama
 * @property string $tempat
 * @property integer $jenis_kegiatan
 * @property string $tahun
 * @property string $jabatan
 * @property integer $people_id
 * @property integer $user_id
 */
class Organisasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_organisasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, tempat, jenis_kegiatan, tahun, jabatan, people_id, user_id', 'required'),
			array('jenis_kegiatan, people_id, user_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			array('tempat, jabatan', 'length', 'max'=>50),
			array('tahun', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_organisasi, nama, tempat, jenis_kegiatan, tahun, jabatan, people_id, user_id', 'safe', 'on'=>'search'),
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
			'id_organisasi' => 'Id Organisasi',
			'nama' => 'Nama',
			'tempat' => 'Tempat',
			'jenis_kegiatan' => 'Jenis Kegiatan',
			'tahun' => 'Tahun',
			'jabatan' => 'Jabatan',
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

		$criteria->compare('id_organisasi',$this->id_organisasi);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('jenis_kegiatan',$this->jenis_kegiatan);
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('jabatan',$this->jabatan,true);
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
	 * @return Organisasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
