<?php
/**
* UserIdentity represents the data needed to identity a user.
* It contains the authentication method that checks if the provided
* data can identify the user.
*/
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	* Authenticates a user using the User data model.
	* @return boolean whether authentication succeeds.
	*/
	public function authenticate()
	{
		$user=User::model()->findByAttributes(array('username'=>$this->username));
		if($user===null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;  //sets the errorCode=1
		}
		else
		{
			if($user->password!==$user->encrypt($this->password))
			//if($user->password !== md5($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;   //sets the errorCode=2
			}
			else
			{
				$this->_id = $user->id;
				if(null===$user->last_login_time)
				{
					$lastLogin = time();
				}	
				else
				{
					$lastLogin = strtotime($user->last_login_time);
				}
				$this->setState('lastLoginTime', $lastLogin); 
				$this->errorCode=self::ERROR_NONE;     //sets the errorCode=0
			}
		}
		return !$this->errorCode;
		
		
		/*$user=User::model()->findByAttributes(array('username'=>$this->username));
		$this->_id = $user->id;
		$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
	}
	
	
	
	
	
	
	public function getId()
	{
		return $this->_id;
	}
}

