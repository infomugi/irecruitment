<?php

/**
 * This is the model class for table "pelamar_bahasa".
 *
 * The followings are the available columns in table 'pelamar_bahasa':
 * @property integer $id_bahasa
 * @property string $nama
 * @property integer $berbicara
 * @property integer $menulis
 * @property integer $membaca
 * @property integer $mengerti
 * @property integer $people_id
 * @property integer $user_id
 */
class Bahasa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_bahasa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, berbicara, menulis, membaca, mengerti, people_id, user_id', 'required'),
			array('berbicara, menulis, membaca, mengerti, people_id, user_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bahasa, nama, berbicara, menulis, membaca, mengerti, people_id, user_id', 'safe', 'on'=>'search'),
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
			'id_bahasa' => 'Id Bahasa',
			'nama' => 'Nama',
			'berbicara' => 'Berbicara',
			'menulis' => 'Menulis',
			'membaca' => 'Membaca',
			'mengerti' => 'Mengerti',
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

		$criteria->compare('id_bahasa',$this->id_bahasa);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('berbicara',$this->berbicara);
		$criteria->compare('menulis',$this->menulis);
		$criteria->compare('membaca',$this->membaca);
		$criteria->compare('mengerti',$this->mengerti);
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
	 * @return Bahasa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function grade($data){
		if($data==1){
			return "Sangat Kurang";
		}else if($data==2){
			return "Kurang";
		}else if($data==3){
			return "Baik";
		}else if($data==4){
			return "Sangat Baik";
		}else{
			return "-";
		}
	}
}
