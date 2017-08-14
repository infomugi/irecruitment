<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $image
 * @property string $date_create
 * @property integer $level_ID
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('username, password, email', 'required','on'=>'register_user'),
			array('username, password, email', 'required','on'=>'update_user'),
			array('date_create', 'default', 'value'=>date('Y-m-d H:i:s'), 'on'=>'register_user'),
			array('level_ID', 'default', 'value'=>'2', 'on'=>'register_user'),
			
			array('username, password, email', 'required','on'=>'create'),
			array('image', 'required','on'=>'upload'),
			array('username, email', 'unique'),
			array('email', 'email'),
			array('level_ID', 'numerical', 'integerOnly'=>true),

			array('username, email', 'length', 'max'=>50),
			array('password, image', 'length', 'max'=>255),
			array('username, email','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, username, password, email, date_create, level_ID', 'safe', 'on'=>'search'),
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
			'peoples' => array(self::HAS_MANY, 'People', 'id_user'),
			'level' => array(self::BELONGS_TO, 'Level', 'level_ID'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'image' => 'Foto',
			'date_create' => 'Tanggal Registrasi',
			'level_ID' => 'Level',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('level_ID',$this->level_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	public function getUser($level_ID)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('level_ID',$this->level_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public function validatePassword($password) 
	{ 
		return md5($password)===$this->password; 
	}	
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function avatar($data)
	{
		$model= User::model()->findByPk($data);
		return $model->image;
	}	
}
