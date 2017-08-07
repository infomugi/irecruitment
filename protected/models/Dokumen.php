<?php

/**
 * This is the model class for table "pelamar_dokumen".
 *
 * The followings are the available columns in table 'pelamar_dokumen':
 * @property integer $id_dokumen
 * @property string $tanggal
 * @property string $cv
 * @property string $ktp
 * @property string $ijazah
 * @property string $transkrip
 * @property string $skck
 * @property string $sertifikat
 * @property integer $people_id
 * @property integer $user_id
 * @property integer $verifikasi_id
 * @property string $tanggal_verifikasi
 * @property integer $status
 */
class Dokumen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_dokumen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, cv, ktp, ijazah, transkrip, skck, sertifikat, people_id, user_id, verifikasi_id, tanggal_verifikasi, status', 'required'),
			array('people_id, user_id, verifikasi_id, status', 'numerical', 'integerOnly'=>true),
			array('cv, ktp, ijazah, transkrip, skck, sertifikat', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dokumen, tanggal, cv, ktp, ijazah, transkrip, skck, sertifikat, people_id, user_id, verifikasi_id, tanggal_verifikasi, status', 'safe', 'on'=>'search'),
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
			'id_dokumen' => 'Id Dokumen',
			'tanggal' => 'Tanggal',
			'cv' => 'Cv',
			'ktp' => 'Ktp',
			'ijazah' => 'Ijazah',
			'transkrip' => 'Transkrip',
			'skck' => 'Skck',
			'sertifikat' => 'Sertifikat',
			'people_id' => 'People',
			'user_id' => 'User',
			'verifikasi_id' => 'Verifikasi',
			'tanggal_verifikasi' => 'Tanggal Verifikasi',
			'status' => 'Status',
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

		$criteria->compare('id_dokumen',$this->id_dokumen);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('cv',$this->cv,true);
		$criteria->compare('ktp',$this->ktp,true);
		$criteria->compare('ijazah',$this->ijazah,true);
		$criteria->compare('transkrip',$this->transkrip,true);
		$criteria->compare('skck',$this->skck,true);
		$criteria->compare('sertifikat',$this->sertifikat,true);
		$criteria->compare('people_id',$this->people_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('verifikasi_id',$this->verifikasi_id);
		$criteria->compare('tanggal_verifikasi',$this->tanggal_verifikasi,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dokumen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function type($data){
		if($data==1){
			return "cv";
		}else if($data==2){
			return "ktp";
		}else if($data==3){
			return "ijazah";
		}else if($data==4){
			return "transkrip";
		}else if($data==5){
			return "skck";
		}else{
			return "sertifikat";
		}
	}
}
