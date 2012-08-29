<?php

/**
 * This is the model class for table "tbl_people".
 *
 * The followings are the available columns in table 'tbl_people':
 * @property integer $id
 * @property integer $family_id
 * @property integer $salutation_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $maiden_name
 * @property integer $suffix_id
 * @property string $nick_name
 * @property string $mobile_number
 * @property string $work_number
 * @property string $email_address1
 * @property string $email_address2
 * @property integer $gender
 * @property integer $head_of_house
 * @property string $date_of_birth
 * @property string $date_of_baptism
 * @property integer $previous_church_id
 * @property string $date_of_joining
 * @property integer $membership_status_id
 * @property string $date_of_membership
 * @property integer $next_church_id
 * @property string $date_of_leaving
 * @property integer $marital_status_id
 * @property string $date_of_wedding
 * @property string $date_of_death
 * @property string $grave_plot
 * @property string $notes
 * @property integer $gift_aid
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property MaritalStatus $maritalStatus
 * @property Family $family
 * @property Salutation $salutation
 * @property Suffix $suffix
 * @property PreviousChurch $previousChurch
 * @property MembershipStatus $membershipStatus
 * @property NextChurch $nextChurch
 * @property Team[] $tblTeams
 */
class People extends ChurchDbActiveRecord
{
	//for use with the gender options - no separate model needed as choice is limited
	const GENDER_FEMALE=0;
	const GENDER_MALE=1;
	
	//for use with the headOfHouse options - no separate model needed as choice is limited
	const HEAD_HOUSE_NO=0;
	const HEAD_HOUSE_YES=1;
	
	//for use with the giftAid options - no separate model needed as choice is limited
	const GIFT_AID_NO=0;
	const GIFT_AID_YES=1;
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return People the static model class
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
		return 'tbl_people';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('family_id, salutation_id, first_name, gender, head_of_house, marital_status_id, gift_aid', 'required'),
			array('family_id, salutation_id, suffix_id, gender, head_of_house, previous_church_id, membership_status_id, next_church_id, marital_status_id, gift_aid, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('first_name, middle_name, last_name, maiden_name, nick_name, email_address1, email_address2, grave_plot', 'length', 'max'=>100),
			array('mobile_number, work_number', 'length', 'max'=>30),
			array('date_of_birth, date_of_baptism, date_of_joining, date_of_membership, date_of_leaving, date_of_wedding, date_of_death, notes, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, family_id, salutation_id, first_name, middle_name, last_name, maiden_name, suffix_id, nick_name, mobile_number, work_number, email_address1, email_address2, gender, head_of_house, date_of_birth, date_of_baptism, previous_church_id, date_of_joining, membership_status_id, date_of_membership, next_church_id, date_of_leaving, marital_status_id, date_of_wedding, date_of_death, grave_plot, notes, gift_aid, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'maritalStatus' => array(self::BELONGS_TO, 'MaritalStatus', 'marital_status_id'),
			'family' => array(self::BELONGS_TO, 'Family', 'family_id'),
			'salutation' => array(self::BELONGS_TO, 'Salutation', 'salutation_id'),
			'suffix' => array(self::BELONGS_TO, 'Suffix', 'suffix_id'),
			'previousChurch' => array(self::BELONGS_TO, 'PreviousChurch', 'previous_church_id'),
			'membershipStatus' => array(self::BELONGS_TO, 'MembershipStatus', 'membership_status_id'),
			'nextChurch' => array(self::BELONGS_TO, 'NextChurch', 'next_church_id'),
			'tblTeams' => array(self::MANY_MANY, 'Team', 'tbl_people_team_assignment(people_id, team_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'family_id' => 'Family',
			'salutation_id' => 'Salutation',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name (Alt)',
			'maiden_name' => 'Maiden Name',
			'suffix_id' => 'Suffix',
			'nick_name' => 'Nick Name',
			'mobile_number' => 'Mobile Number',
			'work_number' => 'Work Number',
			'email_address1' => 'Email Address1',
			'email_address2' => 'Email Address2',
			'gender' => 'Gender',
			'head_of_house' => 'Head Of House',
			'date_of_birth' => 'Date Of Birth',
			'date_of_baptism' => 'Date Of Baptism',
			'previous_church_id' => 'Previous Church',
			'date_of_joining' => 'Date Of Joining',
			'membership_status_id' => 'Membership Status',
			'date_of_membership' => 'Date Of Membership',
			'next_church_id' => 'Next Church',
			'date_of_leaving' => 'Date Of Leaving',
			'marital_status_id' => 'Marital Status',
			'date_of_wedding' => 'Date Of Wedding',
			'date_of_death' => 'Date Of Death',
			'grave_plot' => 'Grave Plot',
			'notes' => 'Notes',
			'gift_aid' => 'Gift Aid',
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
		$criteria->compare('family_id',$this->family_id);
		$criteria->compare('salutation_id',$this->salutation_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('maiden_name',$this->maiden_name,true);
		$criteria->compare('suffix_id',$this->suffix_id);
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('work_number',$this->work_number,true);
		$criteria->compare('email_address1',$this->email_address1,true);
		$criteria->compare('email_address2',$this->email_address2,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('head_of_house',$this->head_of_house);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('date_of_baptism',$this->date_of_baptism,true);
		$criteria->compare('previous_church_id',$this->previous_church_id);
		$criteria->compare('date_of_joining',$this->date_of_joining,true);
		$criteria->compare('membership_status_id',$this->membership_status_id);
		$criteria->compare('date_of_membership',$this->date_of_membership,true);
		$criteria->compare('next_church_id',$this->next_church_id);
		$criteria->compare('date_of_leaving',$this->date_of_leaving,true);
		$criteria->compare('marital_status_id',$this->marital_status_id);
		$criteria->compare('date_of_wedding',$this->date_of_wedding,true);
		$criteria->compare('date_of_death',$this->date_of_death,true);
		$criteria->compare('grave_plot',$this->grave_plot,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('gift_aid',$this->gift_aid);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getAgeOfPerson()
	{
		//need to calculate the age of the person based
		//on their date of birth
		
		$age = '--'; // initialise the age and set to -- if date_of_birth is NULL
		if(!$this->date_of_birth==NULL)
		{ 
			//get the current year, month, and day
			$nowYear = date('Y');
			$nowMonth = date('m');
			$nowDay = date('d');
			//extract the year month and day from the persons DOB
			$dobYear = substr($this->date_of_birth, 6, 4);
			$dobMonth = substr($this->date_of_birth, 3, 2);
			$dobDay = substr($this->date_of_birth, 0, 2);
			//age will be simply the diff in years if the persons 
			//birthday has passed
			$yearDiff = $nowYear - $dobYear;
			$age = $yearDiff;
			
			//test for months if not yet their birth month 
			//subtract a year
			if($dobMonth > $nowMonth) $age = $yearDiff - 1;
			
			//if within birth month test for day if not yet their
			//birth day then subtract year from age
			if($dobMonth == $nowMonth) 
			{
				if($dobDay > $nowDay) $age = $yearDiff - 1;
			}
		}
				
		//return age as calculated in years
		return $age;
	}
	
	public function getGenderText()
	{
		$genderOptions=$this->genderOptions;
		return isset($genderOptions[$this->gender]) ? $genderOptions[$this->gender] : "unknown type ({$this->gender})";
	}
	
	public function getGenderOptions()
	{
		return array(
				self::GENDER_FEMALE=>'Female',
				self::GENDER_MALE=>'Male',
		);	
	}
	
	public function getHeadOfHouseText()
	{
		$headOfHouseOptions=$this->headOfHouseOptions;
		return isset($headOfHouseOptions[$this->head_of_house]) ? $headOfHouseOptions[$this->head_of_house] : "unknown type ({$this->head_of_house})";
	}
	
	public function getHeadOfHouseOptions()
	{
		return array(
				self::HEAD_HOUSE_NO=>'No',
				self::HEAD_HOUSE_YES=>'Yes',
		);	
	}
	
	public function getGiftAidText()
	{
		$giftAidOptions = $this->giftAidOptions;
		return isset($giftAidOptions[$this->gift_aid]) ? $giftAidOptions[$this->gift_aid] : "unknown type ({$this->gift_aid})" ;
	}
	
	public function getGiftAidOptions()
	{
		return array(
				self::GIFT_AID_NO=>'No',
				self::GIFT_AID_YES=>'Yes',
		);
	}
	
	protected function beforeSave()
	{ 
		parent::beforeSave();
		$this->date_of_birth = (($this->date_of_birth==null) ? $this->date_of_birth=null : $this->date_of_birth=date('Y-m-d', strtotime($this->date_of_birth)));
		$this->date_of_baptism = (($this->date_of_baptism==null) ? $this->date_of_baptism=null : $this->date_of_baptism=date('Y-m-d', strtotime($this->date_of_baptism)));
		$this->date_of_joining = (($this->date_of_joining==null) ? $this->date_of_joining=null : $this->date_of_joining=date('Y-m-d', strtotime($this->date_of_joining)));
		$this->date_of_membership = (($this->date_of_membership==null) ? $this->date_of_membership=null : $this->date_of_membership=date('Y-m-d', strtotime($this->date_of_membership)));
		$this->date_of_leaving = (($this->date_of_leaving==null) ? $this->date_of_leaving=null : $this->date_of_leaving=date('Y-m-d', strtotime($this->date_of_leaving)));
		$this->date_of_wedding = (($this->date_of_wedding==null) ? $this->date_of_wedding=null : $this->date_of_wedding=date('Y-m-d', strtotime($this->date_of_wedding)));
		$this->date_of_death = (($this->date_of_death==null) ? $this->date_of_death=null : $this->date_of_death=date('Y-m-d', strtotime($this->date_of_death)));
		return TRUE;
	}
	protected function afterFind()
	{
		parent::afterFind();
		$this->date_of_birth = (($this->date_of_birth==null) ? $this->date_of_birth=null : $this->date_of_birth=date('d-m-Y', strtotime($this->date_of_birth)));
		$this->date_of_baptism = (($this->date_of_baptism==null) ? $this->date_of_baptism=null : $this->date_of_baptism=date('d-m-Y', strtotime($this->date_of_baptism)));
		$this->date_of_joining = (($this->date_of_joining==null) ? $this->date_of_joining=null : $this->date_of_joining=date('d-m-Y', strtotime($this->date_of_joining)));
		$this->date_of_membership = (($this->date_of_membership==null) ? $this->date_of_membership=null : $this->date_of_membership=date('d-m-Y', strtotime($this->date_of_membership)));
		$this->date_of_leaving = (($this->date_of_leaving==null) ? $this->date_of_leaving=null : $this->date_of_leaving=date('d-m-Y', strtotime($this->date_of_leaving)));
		$this->date_of_wedding = (($this->date_of_wedding==null) ? $this->date_of_wedding=null : $this->date_of_wedding=date('d-m-Y', strtotime($this->date_of_wedding)));
		$this->date_of_death = (($this->date_of_death==null) ? $this->date_of_death=null : $this->date_of_death=date('d-m-Y', strtotime($this->date_of_death)));
		
		
		return TRUE;
	}
	
	
}
