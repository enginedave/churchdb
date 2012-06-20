<?php

class DistrictTest extends CDbTestCase
{

	public $fixtures=array(
		'districts'=>'District',
		);

	public function testCreate()
	{
		// test CREATE
		$newDistrict = new District;
		$name = 'Negev';
		$newDistrict->setAttributes(
			array(
				'district_name' => $name,
				'district_leaders_id' => '2',
				'notes' => 'This is a note for the Negev',
				'create_time' => '2011-08-17 11:11:11',
				'create_user_id' => '3',
				'update_time' => '2011-08-17 12:12:12',
				'update_user_id' => '3'
			)
		);
		$this->assertTrue($newDistrict->save(false));
		
		//testREAD
		$retreivedDistrict = District::model()->findByPk($newDistrict->id);
		$this->assertTrue($retreivedDistrict instanceof District);
		$this->assertEquals($name, $retreivedDistrict->district_name);
	}
	
	public function testRead()
	{
		$retreivedDistrict = $this->districts('district1');
		$this->assertTrue($retreivedDistrict instanceof District);
		$this->assertEquals('Cannan', $retreivedDistrict->district_name);
	}
	
	public function testUpdate()
	{
		$newname = 'Cush (updated)';
		$retreivedDistrict = $this->districts('district4');
		$retreivedDistrict->district_name = $newname;
		$retreivedDistrict->save(false);
		$updatedDistrict = District::model()->findByPk($retreivedDistrict->id);
		
		$this->assertEquals($newname, $updatedDistrict->district_name);
	}
	
	public function testDelete()
	{
		$dForDeletion = $this->districts('district4');
		$id = $dForDeletion->id;
		$this->assertTrue($dForDeletion->delete());
		//try to get it back
		$retrieveD = District::model()->findByPk($id);
		$this->assertEquals($retrieveD, NULL);
		//note that because this is a child table the row will delete leaving the parent table untouched		
	}
	
	
	/*public function testGetOptions()
	{
		$options = District::model()->typeOptions;
		$this->assertTrue(is_array($options));
		$this->assertTrue(3 == count($options));
		$this->assertTrue(in_array('Bug', $options));
		$this->assertTrue(in_array('Feature', $options));
		$this->assertTrue(in_array('Task', $options));
	}
	
	public function testGetLeadersList()
	{
		$district = $this->districts('district2');
		$list = $district->leaderOptions;
		$this->assertTrue(is_array($list));
		$this->assertTrue(count($list) > 0);
		$this->assertTrue(count($list) < 2);
	}*/
	
}
