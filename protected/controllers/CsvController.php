<?php

class CsvController extends Controller
{
	function actionIndex()
	{
		$dir = Yii::getPathOfAlias('application.uploads');
		$uploaded = false;
		$file = '';
		$model=new Csv();
		if(isset($_POST['Csv']))
		{
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
					if ($row==1)
					{
						for ($c=0; $c < $num; $c++) {
							//assign $heading the values of the first row
							$headings[$c] = $data[$c];
						}
					}				
				
					
					
					echo "<p> $num fields in line $row: <br /></p>\n";
					echo "<tr>";
					$row++;
					for ($c=0; $c < $num; $c++) {
						//$data[$c] is each element in the row which will correspond to a field
						echo "<td>" . $data[$c] . "</td>";
					}
					echo "</tr>";
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
