<?php
class WebUser extends CWebUser{
	private $_model;
	
	private function loadModel()
	{
		if($this->_model==null)
		{
			$this->_model=User::model()->findByPk($this->id);
			//$this->_model=People::model()->findByPk($this->id_people);
		}
		return $this->_model;
	}
	
	public function getLevel()
	{
		$user=$this->loadModel();
		if($user)
			return $user->level_ID;
			//return $user->id_people;
		return 100;
	}
}
?>