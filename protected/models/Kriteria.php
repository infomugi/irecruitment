<?php

/**
 * This is the model class for table "kriteria".
 *
 * The followings are the available columns in table 'kriteria':
 * @property integer $id_kriteria
 * @property string $kode
 * @property string $nama
 * @property integer $atribut
 * @property integer $bobot
 */
class Kriteria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kriteria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, nama, atribut, bobot', 'required'),
			array('atribut', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>2),
			array('nama, bobot', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kriteria, kode, nama, atribut, bobot', 'safe', 'on'=>'search'),
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
			'id_kriteria' => 'Id Kriteria',
			'kode' => 'Kode',
			'nama' => 'Nama',
			'atribut' => 'Atribut',
			'bobot' => 'Bobot',
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

		$criteria->compare('id_kriteria',$this->id_kriteria);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('atribut',$this->atribut);
		$criteria->compare('bobot',$this->bobot);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kriteria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function bobot($data){
		if($data==1){
			return "Benefit";
		}else{
			return "Cost";
		}
	}
}
