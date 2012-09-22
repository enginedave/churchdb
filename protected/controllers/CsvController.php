<?php

/*notes 

need to get the salutation importing by 
			1. getting the list from the db salutiation table
			2. see if the one in the csv file matches the existing list in the table
			3. if new add to the db
			4. if already there get the index
			5. assign the index to the new person

need to get the dates importing also correctly they seem to be confused perhaps by the USA format.

need to get gender, HOH and gift all working similarly



ALSO need to get people saving when the family already exist and checks for duplicates within the family implemented.

STILL LOTS todo here*/









class CsvController extends Controller
{
	public function actionIndex()
	{
		$dir = Yii::getPathOfAlias('application.uploads');
		$uploaded = false;
		$file = '';
		//should there be a check here as to if the model is a valid model
		$model=new Csv();
		if(isset($_POST['Csv']))
		{
			echo "<br /><br /><br /><br /><h1>This is in the controller</h1><br />";
			
			$model->attributes=$_POST['Csv'];
			$file=CUploadedFile::getInstance($model,'file');
			if($model->validate()){
				$uploaded = $file->saveAs($dir.'/'.$file->getName());
			}
			//open the file to extract the data
			$row = 1;
			if (($handle = fopen($dir.'/'.$file->name, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
					$num = count($data);
					
					//get the first row of the csv file and assign it into an array called $headings
					if ($row==1){
						echo "<h1>".$row."</h1>";
						//echo "<p> this is the first row with ".$num." heading elements</p><p>";
						for ($c=0; $c < $num; $c++) {
							//assign $heading the values of the first row
							$headings[$c] = $data[$c];
							echo "<strong>".$headings[$c]."</strong>,";
						}
						echo "</p><hr />";
					}
						
					if ($row!=1){
						echo "<h1>".$row."</h1>";
						
						$newFamily = $this->populateFamilyWithCsvRow($data, $headings);
						$newPeople = $this->populatePeopleWithCsvRow($data, $headings);
					
						//check if the family_name in the csv file is already in the database
						// NOTE $matchingFamily could be more than one!
						$matchingFamily = Family::model()->findAllByAttributes(array('family_name'=>$data[array_search("family_name",$headings)]));
						
						//the defination of a family is linked to their name and address
						//three things are checked 
						//1. the family_name
						//2. the house_number
						//3. the address_line1
						//if all three are the same then it is assumed that this is the same family
						//if any one differs i.e. you could have a family with the same name in the same street but if their house 
						//number is different then they consistute a different family and are added to the database in the save() operation.
						
						//if new name then save
						if ($matchingFamily==NULL){  //if this is NULL then i know that i have a different family_name and therefore a different family therefore save to DB
							$newFamily->save();
							$familyFromDb = Family::model()->findAllByAttributes(array(
										'family_name' => $newFamily->family_name,
										'house_number' => $newFamily->house_number,
										'address_line1' => $newFamily->address_line1,
										)
							);
							foreach ($familyFromDb as $fdb){
								$newPeople->setAttributes(array('family_id' => $fdb->id));
								echo "family id from Db: ".$fdb->id;
							}
							if ($newPeople->save()) {echo "people SAVED";} else {echo "didnt WORK";}
							echo "<p>The <strong>".$newFamily->family_name."</strong> family has been added - NEW NAME + NEW PERSON</p><hr />";
						}
						
						//if name and address are the same dont save
						//if $matchingFamily is not NULL it may contain more that one family object with the same name 
						//need to loop through the array of objects and check if the house_number or address_line1 is different
						if ($matchingFamily != NULL){
							foreach ($matchingFamily as $mf){
								//test to see if the house_numbers are the same
								echo ($mf->house_number == $newFamily->house_number) ? "<p>".$mf->house_number." is the same as: ".$newFamily->house_number."</p>" : "<p>".$mf->house_number." is NOT the same as: ".$newFamily->house_number."</p>";
								echo ($mf->address_line1 == $newFamily->address_line1) ? "<p>".$mf->address_line1." is the same as: ".$newFamily->address_line1."</p>" : "<p>".$mf->address_line1." is NOT the same as: ".$newFamily->address_line1."</p>";
								if ($mf->house_number == $newFamily->house_number && $mf->address_line1 == $newFamily->address_line1){
									//family_name, house_number, address_line1 all the same therefore it is the same family get the family_id from the object 
									$currentFamilyId = $mf->id;
									$shouldisave = FALSE;
									break;
								}
								else if($mf->house_number != $newFamily->house_number || $mf->address_line1 != $newFamily->address_line1){
									//not equal means different house_number OR address_line1 therefore new family and save to DB
									$shouldisave = TRUE;
								}
							}
							if ($shouldisave){
								$newFamily->save();
								$familyFromDb = Family::model()->findAllByAttributes(array(
										'family_name' => $newFamily->family_name,
										'house_number' => $newFamily->house_number,
										'address_line1' => $newFamily->address_line1,
										)
								);
								foreach ($familyFromDb as $fdb){
									$newPeople->setAttributes(array('family_id' => $fdb->id));
								}
								$newPeople->save();
								echo "<p>The <strong>".$newFamily->family_name." ".$newFamily->house_number." ".$newFamily->address_line1." </strong> family has been added to DB + PERSON<p>";
							}
							else {
								echo "<p> This family is already stored in the database: <strong>".$mf->family_name.", ".$mf->house_number.", ".$mf->address_line1."</strong> (all match) </p>";
							}
							echo "<hr />";
						}
					}//end if for this row
					$row++;
				}//end while loop
				fclose($handle);
			}
		}
		
		
		$this->render('index', array(
			'model' => $model,
			'uploaded' => $uploaded,
			'dir' => $dir,
			'file' => $file,
		));
	}//end of actionIndex
	
	
	
	
	
	
	
	
	
	
	
	private function populateFamilyWithCsvRow($csvrow, $headers){
		$newFamily = new Family;
		$newFamily->setAttributes(
							array(
								'family_name' => $csvrow[array_search("family_name",$headers)],
								'house_name' => $csvrow[array_search("house_name",$headers)],
								'house_number' => $csvrow[array_search("house_number",$headers)],
								'address_line1' => $csvrow[array_search("address_line1",$headers)],
								'address_line2' => $csvrow[array_search("address_line2",$headers)],
								'city' => $csvrow[array_search("city",$headers)],
								'region' => $csvrow[array_search("region",$headers)],
								'postcode' => $csvrow[array_search("postcode",$headers)],
								'country' => $csvrow[array_search("country",$headers)],
								'telephone' => $csvrow[array_search("telephone",$headers)],
								'district_id' => '1',
							)
						);
		return $newFamily;	
	}//end populateFamilyWithCsvRow
	
	
	
	
	
	
	
	
	private function populatePeopleWithCsvRow($csvrow, $headers){
		$newPeople = new People;
		
		
		
		
		$newPeople->setAttributes(
							array(
								//'family_id' => '',      --this will be assigned by the controller when it knows what family the person belongs to.
								// deal with the simple strings
								'first_name' => (array_search("first_name",$headers) == FALSE ) ? '' : $csvrow[array_search("first_name",$headers)],
								'middle_name' => (array_search("middle_name",$headers) == FALSE ) ? '' : $csvrow[array_search("middle_name",$headers)],
								'last_name' => (array_search("last_name",$headers) == FALSE ) ? '' : $csvrow[array_search("last_name",$headers)],
								'maiden_name' => (array_search("maiden_name",$headers) == FALSE ) ? '' : $csvrow[array_search("maiden_name",$headers)],
								'nick_name' => (array_search("nick_name",$headers) == FALSE ) ? '' : $csvrow[array_search("nick_name",$headers)],
								'mobile_number' => (array_search("mobile_number",$headers) == FALSE ) ? '' : $csvrow[array_search("mobile_number",$headers)],
								'work_number' => (array_search("work_number",$headers) == FALSE ) ? '' : $csvrow[array_search("work_number",$headers)],
								'email_address1' => (array_search("email_address1",$headers) == FALSE ) ? '' : $csvrow[array_search("email_address1",$headers)],
								'email_address2' => (array_search("email_address2",$headers) == FALSE ) ? '' : $csvrow[array_search("email_address2",$headers)],
								'grave_plot' => (array_search("grave_plot",$headers) == FALSE ) ? '' : $csvrow[array_search("grave_plot",$headers)],
								'notes' => (array_search("notes",$headers) == FALSE ) ? '' : $csvrow[array_search("notes",$headers)],
								
								//the date fields								
								'date_of_birth' => $csvrow[array_search("date_of_birth",$headers)],
								'date_of_baptism' => $csvrow[array_search("date_of_baptism",$headers)],
								'date_of_joining' => $csvrow[array_search("date_of_joining",$headers)],								
								'date_of_membership' => $csvrow[array_search("date_of_membership",$headers)],								
								'date_of_leaving' => $csvrow[array_search("date_of_leaving",$headers)],								
								'date_of_wedding' => $csvrow[array_search("date_of_wedding",$headers)],
								'date_of_death' => $csvrow[array_search("date_of_death",$headers)],
								
								// these are all constants in the People model
								'gender' => '1',
								'head_of_house' =>'1',
								'gift_aid' => '1',
								
								//these are all referring to other look up tables
								'previous_church_id' => '1', //an id of 1 defaults to NULL 
								'next_church_id' => '1',     //an id of 1 defaults to NULL
								'membership_status_id' => '1',   //an id of 1 defaults to Unassigned
								'marital_status_id' => '1',      //an id of 1 defaults to Unknown
								'salutation_id' =>'1',
								'suffix_id' =>'1',   //an id of 1 defaults to NULL
							)
						);
		return $newPeople;	
	}//end populatePeopleWithCsvRow
	
	
	
}//end class
