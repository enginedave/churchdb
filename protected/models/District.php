<?php

/**
 * This is the model class for table "tbl_district".
 *
 * The followings are the available columns in table 'tbl_district':
 * @property integer $id
 * @property string $district_name
 * @property integer $district_leaders_id
 * @property string $notes
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property DistrictLeader $districtLeaders
 * @property Family[] $familys
 */
class District extends ChurchDbActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return District the static model class
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
		return 'tbl_district';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('district_name, district_leaders_id', 'required'),
			array('district_leaders_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('district_name', 'length', 'max'=>100),
			array('notes, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, district_name, district_leaders_id, notes, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'districtLeaders' => array(self::BELONGS_TO, 'DistrictLeader', 'district_leaders_id'),
			'familys' => array(self::HAS_MANY, 'Family', 'district_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'district_name' => 'District Name',
			'district_leaders_id' => 'District Leader',
			'notes' => 'Notes',
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
		$criteria->compare('district_name',$this->district_name,true);
		$criteria->compare('district_leaders_id',$this->district_leaders_id);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
