<?php

class PeopleTest extends CDbTestCase
{
	public $fixtures=array(
		'peoples'=>'People',
		'families'=>'Family',
		);
		
	public function testRead()
	{
		$retreivedPeople = $this->peoples('people1');
		$this->assertTrue($retreivedPeople instanceof People);
		$this->assertEquals('David', $retreivedPeople->first_name);
	}
	
	public function testGetGenderOptions()
	{
		$options = People::model()->genderOptions;
		$this->assertTrue(is_array($options));
		$this->assertTrue(2 == count($options));
		$this->assertTrue(in_array('Female', $options));
		$this->assertTrue(in_array('Male', $options));
	}
	
	public function testGetGenderText()
	{
		$this->assertTrue('Male'==$this->peoples('people1')->getGenderText());
	}
	
	public function testGetHeadOfHouseOptions()
	{
		$options = People::model()->headOfHouseOptions;
		$this->assertTrue(is_array($options));
		$this->assertTrue(2 == count($options));
		$this->assertTrue(in_array('No', $options));
		$this->assertTrue(in_array('Yes', $options));
	}
	
	public function testGetHeadOfHouseText()
	{
		$this->assertTrue('Yes'==$this->peoples('people1')->getHeadOfHouseText());
	}
	
	public function testGetGiftAidOptions()
	{
		$options = People::model()->giftAidOptions;
		$this->assertTrue(is_array($options));
		$this->assertTrue(2 == count($options));
		$this->assertTrue(in_array('No', $options));
		$this->assertTrue(in_array('Yes', $options));
	}
	
	public function testGetGiftAidText()
	{
		$this->assertTrue('Yes'==$this->peoples('people1')->getGiftAidText());
	}
	
	
	
	
	
	
}
