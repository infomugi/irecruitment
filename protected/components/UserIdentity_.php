<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_Lvl;
	
	/*public function authenticate()
	{
		$konek		= Yii::app()->db;
		$username 	= strtolower($this->username);
		$password	= $this->password;
		$que="
			Select id_siswa id , username,level from siswa
			where LOWER(concat('siswa@',username))='$username' and password='$password'
			union 
			Select id_admin id , username,level from admin
			where LOWER(concat('admin@',username)) ='$username' and password='$password'
			union 
			Select id_guru id , username,level from guru
			where LOWER(concat('guru@',username))='$username' and password='$password'
		";
		
		$user=$konek->createCommand();
		$user->select("id_admin id , username,level, password");
		$user->from("admin where LOWER(concat('admin@',username)) ='$username' and password='admin'");
		$user->union("Select id_siswa id , username,level,password 
			from siswa
			where LOWER(concat('siswa@',username)) ='$username' and password='$password'");
		
		$user->union("Select id_guru id , username,level,password 
			from guru
			where LOWER(concat('guru@',username)) ='$username' and password='$password'");
		
		//$txt=$user->getText();
		$user=$user->queryRow();
		//$user = User::model()->find('LOWER(username)=?', array($username));
		if(sizeof($user)==0){
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($user['password'] != $password){
		    $this->errorCode = self::ERROR_PASSWORD_INVALID;
			//Yii::app()->user->setState("err",$txt);
		}
		else
		{
		    
			$Duser = explode("@",$username);
			switch($Duser[0]){
				case "admin":Yii::app()->user->setState("level","1");break;
				case "guru":Yii::app()->user->setState("level","2");break;
				case "siswa":Yii::app()->user->setState("level","3");break;
			}
			$this->_id = $user['id'];
			$this->_Lvl= $user['level'];
		    $this->username = $Duser[1];
		    $this->errorCode = self::ERROR_NONE;
	  	}
	   	return $this->errorCode == self::ERROR_NONE;
	}
	public function getId(){return $this->_id;}
//	public function getLvl(){return $this->_Lvl;} */

	public function authenticate()
	{		
		//$user=Employee::model()->find('username=? and password=md5("'.$this->password.'")', array($this->username));
		$user=User::model()->find('username=?', array($this->username));
		if($user==null)
		{	

			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} 
		elseif (!$user->validatePassword($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$this->errorCode=self::ERROR_NONE;
			$this->_id=$user->id_user;
		}
		return !$this->errorCode;
			
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
}