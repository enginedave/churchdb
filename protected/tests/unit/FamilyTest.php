<?php

class FamilyTest extends CDbTestCase
{

	public $fixtures=array(
		'familys'=>'Family',
		'users'=>'User',
		);
		
	public function testCreate()
	{
		//test CREATE
		$newFamily = new Family;
		$fname = 'Green';
		$newFamily->setAttributes(
			array(
				'family_name' => $fname,
				'house_name' => 'housename',
				'house_number' => '4',
				'address_line1' => 'Anystreet',
				'address_line2' => 'Anyplace',
				'city' => 'Anycity',
				'region' => 'Anyregion',
				'postcode' => 'BT99 9YY',
				'country' => 'Northern Ireland',
				'telephone' => '123 1234 1234',
				'district_id' => '1',
				//'create_time' => '2011-08-17 11:11:11',
				//'create_user_id' => '3',
				//'update_time' => '2011-08-17 12:12:12',
				//'update_user_id' => '3'
			)
		);
		Yii::app()->user->setId($this->users('user1')->id);
				
		$this->assertTrue($newFamily->save());
		
		//test READ
		$retreivedFamily = Family::model()->findByPk($newFamily->id);
		$this->assertTrue($retreivedFamily instanceof Family);
		$this->assertEquals($fname, $retreivedFamily->family_name);
		
		$this->assertEquals(Yii::app()->user->id, $retreivedFamily->create_user_id);
		$this->assertEquals(Yii::app()->user->id, $retreivedFamily->update_user_id);
	}
	
	public function testRead()
	{
		$retreivedFamily = $this->familys('family1');
		$this->assertTrue($retreivedFamily instanceof Family);
		$this->assertEquals('Skywalker', $retreivedFamily->family_name);
	}

	public function testUpdate()
	{
		$newfname = 'Calrissian (updated)';
		$retreivedFamily = $this->familys('family3');
		$retreivedFamily->family_name = $newfname;
		$retreivedFamily->save(false);
		$updatedFamily = Family::model()->findByPk($retreivedFamily->id);
		
		$this->assertEquals($newfname, $updatedFamily->family_name);
	}
		
	public function testDelete()
	{
		$famForDeletion = $this->familys('family4');
		$id = $famForDeletion->id;
		$this->assertTrue($famForDeletion->delete());
		//try to get it back
		$retrieveFam = Family::model()->findByPk($id);
		$this->assertEquals($retrieveFam, NULL);
		//note that because this is a child table the row will delete leaving the parent table untouched		
	}
	
}
