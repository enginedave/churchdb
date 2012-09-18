<?php
/* @var $this CsvController */

$this->breadcrumbs=array(
	'Csv',
);
?>

<?php if($uploaded):?>
	<p>File was uploaded. Check <?php echo $dir?>.</p>

	<h1>File contents</h1>
	<p>
	<?php 
		echo $file->getName().' <strong>the size</strong> '.$file->size.' bytes</br>';
		echo $file->name.' <strong>the size</strong> '.$file->size.' bytes</br>';
		echo $file->tempName.'</br>';
		echo 'the file directory is '.$dir.'</br>';
	?>
	</p>


	<h1>Contents</h1>

	<div><table border="1">


	<?php
	$row = 1;
	if (($handle = fopen($dir.'/'.$file->name, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
		    $num = count($data);
		    //echo "<p> $num fields in line $row: <br /></p>\n";
		    echo "<tr>";
		    $row++;
		    for ($c=0; $c < $num; $c++) {
		        echo "<td>" . $data[$c] . "</td>";
		    }
		    echo "</tr>";
		}
		fclose($handle);
	}
	?>
	
	</table></div>


<?php endif ?>
<?php echo CHtml::beginForm('','post',array
('enctype'=>'multipart/form-data'))?>
<?php echo CHtml::error($model, 'file')?>
<?php echo CHtml::activeFileField($model, 'file')?>
<?php echo CHtml::submitButton('Upload')?>
<?php echo CHtml::endForm()?>

