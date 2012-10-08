<?php


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
						
						$existingFamilyFromDb = Family::model()->findByAttributes(array(
										'family_name' => $newFamily->family_name,
										'house_number' => $newFamily->house_number,
										'address_line1' => $newFamily->address_line1,
										)
							);
						
						if ($existingFamilyFromDb == NULL) {   //if true i have a new family
							$newFamily->save();
							//read the family back to get the proper ID
							$newFamilyFromDB = Family::model()->findByAttributes(array(
										'family_name' => $newFamily->family_name,
										'house_number' => $newFamily->house_number,
										'address_line1' => $newFamily->address_line1,
										)
							);
							//set the family_id for the people object to the correct family
							$newPeople->setAttributes(array('family_id' => $newFamilyFromDB->id));		
							$newPeople->save();					
						}
						
						if ($existingFamilyFromDb != NULL) {   //family already exists
							$existingPersonFromDb = People::model()->findByAttributes(array(
										'first_name' => $newPeople->first_name,
										'middle_name' => $newPeople->middle_name,
										)
							);
							if ($existingPersonFromDb == NULL) {  //if true i have a new person
								$newPeople->setAttributes(array('family_id' => $existingFamilyFromDb->id));		
								$newPeople->save();
							}
						}
						
						
					
					}//end if
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
		
		//get the appropriate id for the salutation ************************************* SALUTATION ID ***************************************
		$salutationFromCsv = $csvrow[array_search("salutation",$headers)];
		//clean up . at end if present 
		if ($salutationFromCsv == 'Mr.') $salutationFromCsv='Mr';
		if ($salutationFromCsv == 'Mrs.') $salutationFromCsv='Mrs';
		if ($salutationFromCsv == 'Ms.') $salutationFromCsv='Ms';
		if ($salutationFromCsv == 'Miss.') $salutationFromCsv='Miss';
		if ($salutationFromCsv == 'Master.') $salutationFromCsv='Master';
		if ($salutationFromCsv == 'Dr.') $salutationFromCsv='Dr';
		if ($salutationFromCsv == 'Rev.') $salutationFromCsv='Rev';
		if ($salutationFromCsv == 'Prof.') $salutationFromCsv='Prof';
		//find a match in the database, get the object and thus the id value
		$salutationFromDb = Salutation::model()->findByAttributes(array(
					'salutation'=> $salutationFromCsv,
				));
		if ($salutationFromDb == NULL) {
			echo 'NULL returned<br />';
			$newSal = new Salutation;
			$newSal->setAttributes(array(
					'salutation'=>$salutationFromCsv,
					));
			//save to the database
			$newSal->save();
			$salutationFromDb = Salutation::model()->findByAttributes(array(
					'salutation'=>$salutationFromCsv,
					));
		} else {
			echo $salutationFromDb->salutation.' has the id value of :'.$salutationFromDb->id.'<br />';
		}	
		if ($salutationFromDb == NULL) { $salid = 1;} else {$salid = $salutationFromDb->id;}
				
		//get the appropriate marital status ************************************************** MARITAL STATUS ID *******************************************
		$maritalFromCsv = $csvrow[array_search("marital_status",$headers)];	
		//find a match in the database, get the object and thus the id value
		$maritalFromDb = MaritalStatus::model()->findByAttributes(array(
					'marital_status_type'=> $maritalFromCsv,
				)); 
		if ($maritalFromDb == NULL) {
			echo 'NULL returned<br />';
			$newMs = new MaritalStatus;
			$newMs->setAttributes(array(
					'marital_status_type' => $maritalFromCsv,
					));
			//save to the database
			$newMs->save();
			$maritalFromDb = MaritalStatus::model()->findByAttributes(array(
					'marital_status_type'=>$maritalFromCsv,
					));
		} 
		if ($maritalFromDb == NULL) { $msid = 1;} else {$msid = $maritalFromDb->id;}
		
		//get the appropriate membership status ************************************************** MEMBERSHIP STATUS ID *******************************************
		$membershipFromCsv = $csvrow[array_search("membership_status",$headers)];	
		//find a match in the database, get the object and thus the id value
		$membershipFromDb = MembershipStatus::model()->findByAttributes(array(
					'membership_type'=> $membershipFromCsv,
				)); 
		if ($membershipFromDb == NULL) {
			echo 'NULL returned<br />';
			$newMt = new MembershipStatus;
			$newMt->setAttributes(array(
					'membership_type' => $membershipFromCsv,
					));
			//save to the database
			$newMt->save();
			$membershipFromDb = MembershipStatus::model()->findByAttributes(array(
					'membership_type'=>$membershipFromCsv,
					));
		} 
		if ($membershipFromDb == NULL) { $mtid = 1;} else {$mtid = $membershipFromDb->id;}
				
		//get the appropriate gender information ************************************************** GENDER *******************************************
		$genderFromCsv = trim($csvrow[array_search("gender",$headers)]);
		$gen = 1; //default to male if not changed 
		switch ($genderFromCsv) {
			case 'Male':
				$gen = 1;
				break;
			case 'male':
				$gen = 1;
				break;
			case 'm':
				$gen = 1;
				break;
			case 'Female':
				$gen = 0;
				break;
			case 'female':
				$gen = 0;
				break;
			case 'f':
				$gen = 0;
				break;
		}
		
		
		
		
		
		
		
		
		
				
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
								// use the private function (formatDateFromCsv) to correctly format the date for the People model
								'date_of_birth' => $this->formatDateFromCsv($csvrow[array_search("date_of_birth",$headers)]),
								'date_of_baptism' => $this->formatDateFromCsv($csvrow[array_search("date_of_baptism",$headers)]),
								'date_of_joining' => $this->formatDateFromCsv($csvrow[array_search("date_of_joining",$headers)]),								
								'date_of_membership' => $this->formatDateFromCsv($csvrow[array_search("date_of_membership",$headers)]),								
								'date_of_leaving' => $this->formatDateFromCsv($csvrow[array_search("date_of_leaving",$headers)]),								
								'date_of_wedding' => $this->formatDateFromCsv($csvrow[array_search("date_of_wedding",$headers)]),
								'date_of_death' => $this->formatDateFromCsv($csvrow[array_search("date_of_death",$headers)]),
								
								// these are all constants in the People model
								'gender' => $gen,
								'head_of_house' =>'0',   //defaults to no
								'gift_aid' => '0',       //defaults to no
								
								//these are all referring to other look up tables
								'previous_church_id' => '1', //an id of 1 defaults to NULL 
								'next_church_id' => '1',     //an id of 1 defaults to NULL
								'membership_status_id' => $mtid,   //defaults to an id of 1 Unassigned
								'marital_status_id' => $msid,     //defaults to 1 unknown if CSV file empty 
								'salutation_id' => $salid, //defaults to Mr if CSV file empty
								'suffix_id' =>'1',   //an id of 1 defaults to NULL
							)
						);
		return $newPeople;	
	}//end populatePeopleWithCsvRow
	
	
	private function formatDateFromCsv($csvdate){   //assumed date 25/08/2012 dd/mm/yyyy
		//this function simply takes the value from the csv file which may use / as the separator (most common)
		//strip out the day month and year 
		//put it together in a way that will be read by the People model correctly
		if ($csvdate == NULL){
			return NULL;
		} else {
			$day = substr($csvdate, 0, 2);
			$mth = substr($csvdate, 3, 2);
			$yer = substr($csvdate, 6, 4);
			return $day.'-'.$mth.'-'.$yer;
		}
	}
	
	
	
	
}//end class
