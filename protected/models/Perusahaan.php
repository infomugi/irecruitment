<?php

/**
 * This is the model class for table "perusahaan".
 *
 * The followings are the available columns in table 'perusahaan':
 * @property integer $id_perusahaan
 * @property string $nama
 * @property string $alamat
 * @property string $kontak
 * @property string $email
 * @property string $nama_pic
 * @property string $kontak_pic
 * @property string $industri
 * @property integer $status
 */
class Perusahaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perusahaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, kontak, email, nama_pic, kontak_pic, industri, status', 'required'),
			array('id_perusahaan, status', 'numerical', 'integerOnly'=>true),
			array('nama, nama_pic, industri', 'length', 'max'=>50),
			array('kontak, email, kontak_pic', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perusahaan, nama, alamat, kontak, email, nama_pic, kontak_pic, industri, status', 'safe', 'on'=>'search'),
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
			'Perusahaan' => array(self::HAS_MANY, 'Perusahaan', 'id_perusahaan'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_perusahaan' => 'Id Perusahaan',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'kontak' => 'Kontak Perusahaan',
			'email' => 'Email Perusahaan',
			'nama_pic' => 'Nama PIC',
			'kontak_pic' => 'Kontak PIC',
			'industri' => 'Industri',
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

		$criteria->compare('id_perusahaan',$this->id_perusahaan);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kontak',$this->kontak,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nama_pic',$this->nama_pic,true);
		$criteria->compare('kontak_pic',$this->kontak_pic,true);
		$criteria->compare('industri',$this->industri,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perusahaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
