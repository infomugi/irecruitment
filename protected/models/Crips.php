<?php

/**
 * This is the model class for table "crips".
 *
 * The followings are the available columns in table 'crips':
 * @property integer $id_crips
 * @property integer $kriteria_id
 * @property integer $keterangan
 * @property integer $nilai
 */
class Crips extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'crips';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kriteria_id, keterangan, nilai', 'required'),
			array('keterangan', 'length', 'max'=>255),
			array('kriteria_id, nilai', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_crips, kriteria_id, keterangan, nilai', 'safe', 'on'=>'search'),
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
			'Kriteria'=>array(self::BELONGS_TO,'Kriteria','kriteria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_crips' => 'Id Crips',
			'kriteria_id' => 'Kriteria',
			'keterangan' => 'Keterangan',
			'nilai' => 'Nilai',
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

		$criteria->compare('id_crips',$this->id_crips);
		$criteria->compare('kriteria_id',$this->kriteria_id);
		$criteria->compare('keterangan',$this->keterangan);
		$criteria->compare('nilai',$this->nilai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Crips the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
