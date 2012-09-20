<?php

class CsvController extends Controller
{
	function actionIndex()
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
						echo "<p> this is the first row with ".$num." elements</p><p>";
						for ($c=0; $c < $num; $c++) {
							//assign $heading the values of the first row
							$headings[$c] = $data[$c];
							echo "<strong>".$headings[$c]."</strong>,";
						}
						echo "</p>";
					}
						
					if ($row!=1){
						echo "<p> this is row ".$row." with ".$num." elements</p><p>";
						//create a new family object and write to the database
						$newFamily = new Family;
					
						//the line below assigns the field of the family object with the data column with the correct heading
						//'family_name' => $data[array_search("family_name",$headings)],
					
						$newFamily->setAttributes(
							array(
								'family_name' => $data[array_search("family_name",$headings)],
								'house_name' => $data[array_search("house_name",$headings)],
								'house_number' => $data[array_search("house_number",$headings)],
								'address_line1' => $data[array_search("address_line1",$headings)],
								'address_line2' => $data[array_search("address_line2",$headings)],
								'city' => $data[array_search("city",$headings)],
								'region' => $data[array_search("region",$headings)],
								'postcode' => $data[array_search("postcode",$headings)],
								'country' => $data[array_search("country",$headings)],
								'telephone' => $data[array_search("telephone",$headings)],
								'district_id' => '1',
							)
						);
						//check if the name in the csv file is already in the database
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
						
					
						if ($matchingFamily==NULL){  //if this is NULL then i know that i have a different name and therefore a different family therefore save to DB
							$newFamily->save();
							echo "<p>The <strong>".$newFamily->family_name."</strong> family has been added to the database</p>";
						}
						//if $matchingFamily is not NULL it may contain more that one family object with the same name 
						//need to loop through the array of objects and check if the house_number is the different from
						if ($matchingFamily != NULL){
							foreach ($matchingFamily as $mf){
								//test to see if the house_numbers are the same
								if ($mf->house_number == $newFamily->house_number){
									//test to see if the address_line1 is the same
									if ($mf->address_line1 == $newFamily->address_line1){
										//family_name, house_number, address_line1 all the same therefore it is the same family get the family_id from the object 
										$currentFamilyId = $mf->id;
										echo "<p> This family is already stored in the database: <strong>".$mf->family_name.", ".$mf->house_number.", ".$mf->address_line1."</strong> </p>";
									}
								}
							}
						}
						
						//need to cover the situation of same name, same number but diff address
						//save to DB

						//need to cover the situation of same name, diff number but same address
						//save to DB
						
						
					
					}
					
					
					
					$row++;
					
				}
				fclose($handle);
			}
		}
		
		//open the file 
		
			
		
		
		//extract the elements of the file 
		
		
		//create the family model from the row in the file if it does not already exist
		//the criteria for an already existing family will be the same name and same address_line1 field
		
		
		
		//create the people model from the same row of the file
		
		
		
		
		
		
		
		
		
		$this->render('index', array(
			'model' => $model,
			'uploaded' => $uploaded,
			'dir' => $dir,
			'file' => $file,
		));
	}
}
