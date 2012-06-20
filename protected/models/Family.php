<?php

/**
 * This is the model class for table "tbl_family".
 *
 * The followings are the available columns in table 'tbl_family':
 * @property integer $id
 * @property string $family_name
 * @property string $house_name
 * @property string $house_number
 * @property string $address_line1
 * @property string $address_line2
 * @property string $city
 * @property string $region
 * @property string $postcode
 * @property string $country
 * @property string $telephone
 * @property integer $district_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property District $district
 * @property People[] $peoples
 */
class Family extends ChurchDbActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Family the static model class
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
		return 'tbl_family';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('family_name, district_id', 'required'),
			//array('district_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('district_id', 'numerical', 'integerOnly'=>true),
			array('family_name, house_name, address_line1, address_line2, city, region, country', 'length', 'max'=>100),
			array('house_number', 'length', 'max'=>10),
			array('postcode', 'length', 'max'=>20),
			array('telephone', 'length', 'max'=>25),
			//array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, family_name, house_name, house_number, address_line1, address_line2, city, region, postcode, country, telephone, district_id, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'district' => array(self::BELONGS_TO, 'District', 'district_id'),
			'peoples' => array(self::HAS_MANY, 'People', 'family_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'family_name' => 'Family Name',
			'house_name' => 'House Name',
			'house_number' => 'House Number',
			'address_line1' => 'Address Line1',
			'address_line2' => 'Address Line2',
			'city' => 'City',
			'region' => 'Region',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'telephone' => 'Telephone',
			'district_id' => 'District',
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
		$criteria->compare('family_name',$this->family_name,true);
		$criteria->compare('house_name',$this->house_name,true);
		$criteria->compare('house_number',$this->house_number,true);
		$criteria->compare('address_line1',$this->address_line1,true);
		$criteria->compare('address_line2',$this->address_line2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>array('family_name'=>false),
			),
		));
	}
}
