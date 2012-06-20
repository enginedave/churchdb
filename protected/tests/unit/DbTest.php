<?php

class DbTest extends CTestCase
{
	public function testConnection()
	{
		//$this->assertTrue(true);
		$this->assertNotEquals(NULL, Yii::app()->db);
	
	
	}

}
