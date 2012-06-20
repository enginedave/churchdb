<?php

//abstract class as this should not be instantiated
//this class provides the functionality of setting the 
//create_time update_time create_user_id and update_user_id 
//prior to validation
abstract class ChurchDbActiveRecord extends CActiveRecord
{
	//this function overrides the parent function beforeValidate to set the four auditing values
	protected function beforeValidate()
	{
		if($this->isNewRecord)
		{
			//new record so set all four values
			$this->create_time = $this->update_time = new CDbExpression('NOW()');
			$this->create_user_id = $this->update_user_id = Yii::app()->user->id;
		}
		else
		{
			//not a new record just an update so set the two values
			$this->update_time = new CDbExpression('NOW()');
			$this->update_user_id = Yii::app()->user->id;
		}
		return parent::beforeValidate();
	}
	
}
