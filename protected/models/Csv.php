<?php
class Csv extends CFormModel
{
	public $file;
	public function rules()
	{
		return array(
			array('file', 'file', 'types'=>'csv', 'maxSize' => 262144),
		);
	}
}

