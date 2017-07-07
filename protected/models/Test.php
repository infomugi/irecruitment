<?php

/**
 * This is the model class for table "test".
 *
 * The followings are the available columns in table 'test':
 * @property integer $id_test
 * @property string $tanggal
 * @property integer $lamaran_id
 * @property integer $lowongan_id
 * @property integer $user_id
 * @property string $status1
 * @property string $berita_acara1
 * @property string $status2
 * @property string $berita_acara2
 * @property string $status3
 * @property string $berita_acara3
 */
class Test extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'test';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, lamaran_id, lowongan_id, user_id, status1, berita_acara1', 'required','on'=>'create'),
			array('status2, berita_acara2', 'required','on'=>'test2'),
			array('status3, berita_acara3', 'required','on'=>'test3'),
			array('lamaran_id, lowongan_id, user_id', 'numerical', 'integerOnly'=>true),
			array('status1, status2, status3', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_test, tanggal, lamaran_id, lowongan_id, user_id, status1, berita_acara1, status2, berita_acara2, status3, berita_acara3', 'safe', 'on'=>'search'),
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
			'Lamaran'=>array(self::BELONGS_TO,'FileLamaran','lamaran_id'),
			'Lowongan'=>array(self::BELONGS_TO,'Lowongan','lowongan_id'),
			'User'=>array(self::BELONGS_TO,'User','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_test' => 'Id Test',
			'tanggal' => 'Tanggal',
			'lamaran_id' => 'Lamaran',
			'lowongan_id' => 'Lowongan',
			'user_id' => 'User',
			'status1' => 'Test Ke-1',
			'berita_acara1' => 'Berita Acara',
			'status2' => 'Test Ke-2',
			'berita_acara2' => 'Berita Acara',
			'status3' => 'Test Ke-3',
			'berita_acara3' => 'Berita Acara',
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

		$criteria->compare('id_test',$this->id_test);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('lamaran_id',$this->lamaran_id);
		$criteria->compare('lowongan_id',$this->lowongan_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('status1',$this->status1,true);
		$criteria->compare('berita_acara1',$this->berita_acara1,true);
		$criteria->compare('status2',$this->status2,true);
		$criteria->compare('berita_acara2',$this->berita_acara2,true);
		$criteria->compare('status3',$this->status3,true);
		$criteria->compare('berita_acara3',$this->berita_acara3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Test the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function jabatan($data){
		$model=Jabatan::model()->findByPk($data);
		return $model->nama;
	}
}
