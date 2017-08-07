<?php

/**
 * This is the model class for table "pelamar_keahlian".
 *
 * The followings are the available columns in table 'pelamar_keahlian':
 * @property integer $id_keahlian
 * @property integer $word
 * @property integer $excel
 * @property integer $powerpoint
 * @property integer $sql
 * @property integer $lan
 * @property integer $wan
 * @property integer $bahasa_pascal
 * @property integer $c
 * @property integer $php
 * @property integer $java
 * @property integer $people_id
 * @property integer $user_id
 */
class Keahlian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pelamar_keahlian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('people_id, user_id', 'required','on'=>'register'),
			array('word, excel, powerpoint, sql, lan, wan, bahasa_pascal, c, php, java, people_id, user_id', 'required','on'=>'update'),
			array('word, excel, powerpoint, sql, lan, wan, bahasa_pascal, c, php, java, people_id, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_keahlian, word, excel, powerpoint, sql, lan, wan, bahasa_pascal, c, php, java, people_id, user_id', 'safe', 'on'=>'search'),
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
			'id_keahlian' => 'Id Keahlian',
			'word' => 'Word',
			'excel' => 'Excel',
			'powerpoint' => 'Powerpoint',
			'sql' => 'Sql',
			'lan' => 'Lan',
			'wan' => 'Wan',
			'bahasa_pascal' => 'Pascal',
			'c' => 'C',
			'php' => 'Php',
			'java' => 'Java',
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

		$criteria->compare('id_keahlian',$this->id_keahlian);
		$criteria->compare('word',$this->word);
		$criteria->compare('excel',$this->excel);
		$criteria->compare('powerpoint',$this->powerpoint);
		$criteria->compare('sql',$this->sql);
		$criteria->compare('lan',$this->lan);
		$criteria->compare('wan',$this->wan);
		$criteria->compare('bahasa_pascal',$this->bahasa_pascal);
		$criteria->compare('c',$this->c);
		$criteria->compare('php',$this->php);
		$criteria->compare('java',$this->java);
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
	 * @return Keahlian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function check($data){
		if($data==1){
			return "Ya";
		}else{
			return "-";
		}
	}

}
