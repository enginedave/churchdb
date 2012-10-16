<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $role_id
 * @property string $last_login_time
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class User extends ChurchDbActiveRecord
{
	public $password_repeat;
	
	//for use with the role options - no separate model needed as choice is limited
	const SUPERADMIN=4;
	const ADMINISTRATOR=3;
	const EDITOR=2;
	const READER=1;
	
	
	
	
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username, password, role_id', 'required'),
			array('password', 'compare'),
			array('password_repeat', 'safe'),
			//array('create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('role_id', 'numerical', 'integerOnly'=>true),
			array('email, username', 'length', 'max'=>100),
			array('password', 'length', 'max'=>128),
			array('email, username', 'unique'),
			//array('last_login_time, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, username, password, role_id, last_login_time, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'role_id' => 'Role',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	








	public function getRoleText()
	{
		$roleOptions=$this->roleOptions;
		return isset($roleOptions[$this->role_id]) ? $roleOptions[$this->role_id] : "unknown type ({$this->role_id})";
	}
	
	
	
	public function getRoleOptions()
	{
		return array(
				self::SUPERADMIN=>'SuperAdmin',
				self::ADMINISTRATOR=>'Administrator',
				self::EDITOR=>'Editor',
				self::READER=>'Reader',
		);	
	}






	
	
	/**
	* perform one-way encryption on the password before we store it in
	the database
	*/
	protected function afterValidate()
	{
		parent::afterValidate();
		$this->password = $this->encrypt($this->password);
	}
	
	
	public function encrypt($value)
	{
		return md5($value);
	}	
	
	
	
	/*protected function beforeSave()
	{
		//need to include code here to change the AuthAssignment table in the database to give 
		//this user the proper role i.e. SuperAdmin, Administrator, Editor, or Reader
	}*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
