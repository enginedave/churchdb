<?php

class DistrictLeaderTest extends CDbTestCase
{
	public $fixtures=array(
		'district_leaders'=>'DistrictLeader',
		);
	
	public function testCreate()
	{
		//test CREATE functionality
		$newDistrictLeader = new DistrictLeader;
		$newDLname = 'Deliah Blue';
		$newDistrictLeader->setAttributes(
			array(
				'name' => $newDLname,
				'create_time' => '2011-08-17 11:11:11',
				'create_user_id' => '3',
				'update_time' => '2011-08-17 12:12:12',
				'update_user_id' => '3'
			)
		);
		$this->assertTrue($newDistrictLeader->save(false));
		
		//test READ functionality to ensure the create actually worked
		$retreivedDistrictLeader = DistrictLeader::model()->findByPk($newDistrictLeader->id);
		$this->assertTrue($retreivedDistrictLeader instanceof DistrictLeader);
		$this->assertEquals($newDLname, $retreivedDistrictLeader->name);
	}
	
	public function testRead()
	{
		$retreivedDistrictLeader = $this->district_leaders('district_leader1');
		$this->assertTrue($retreivedDistrictLeader instanceof DistrictLeader);
		$this->assertEquals('Stass Allie', $retreivedDistrictLeader->name);
	}
	
	public function testUpdate()
	{
		$newname = 'Bail Antilles (updated)';
		$retreivedDistrictLeader = $this->district_leaders('district_leader2');
		$retreivedDistrictLeader->name = $newname;
		$retreivedDistrictLeader->save(false);
		$updatedDistrictLeader = DistrictLeader::model()->findByPk($retreivedDistrictLeader->id);
		
		$this->assertEquals($newname, $updatedDistrictLeader->name);
	}
	
	public function testDelete()
	{
		$dlForDeletion = $this->district_leaders('district_leader4');
		$id = $dlForDeletion->id;
		$this->assertTrue($dlForDeletion->delete());
		//try to get it back
		$retrieveDl = DistrictLeader::model()->findByPk($id);
		$this->assertEquals($retrieveDl, NULL);
		//note that because ON DELETE CASCADE is active when i delete this district_leader
		//any child entries in the district table will also be deleted!!!
		
	}
		
}
