<?php
$this->breadcrumbs=array(
	'Families',
);

$this->menu=array(
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
);
?>

<h1>District Report</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */ ?>

<?php /* $this->widget('zii.widgets.grid.CGridView',
array('dataProvider' => $dataProvider,
))*/?>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_myview',
)); */ ?>

<?php foreach($districtDataProvider->data as $district):?>

	<?php echo '<h3><u>District: ('.$district->id.') '  ?>
	<?php echo $district->district_name.' - '  ?>
	<?php echo 'Leader: '.$district->districtLeaders->name.' '  ?>
	<?php echo '</u></h3>'  ?>

	<?php foreach($familyDataProvider->data as $family):?>
		<?php if($district->id==$family->district_id) {  ?>
			<?php //echo 'Family: ('.$family->id.'), ' ?>
			<?php echo 'Family: ' ?>
			<?php echo '<b>'.$family->family_name.'</b>, ' ?>
			<?php echo $family->address_line1.','  ?>
			<?php //echo '('.$family->district_id.')'  ?>
			<?php echo '</br>'  ?>
			<?php foreach($peopleDataProvider->data as $people):?>
				<?php if($family->id==$people->family_id) {  ?>
					<?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>: ' ?>
					<?php echo $people->salutation->salutation.' ' ?>
					<?php echo $people->first_name.' ' ?>
					<?php echo $people->middle_name.' ' ?>
					<?php echo $family->family_name.' ' ?>
					<?php //echo '('.$people->family_id.'), ' ?>
					<?php echo $people->membershipStatus->membership_type.' ' ?>
					<?php echo '</i></br>'  ?>
				<?php } ?>
			<?php endforeach?>
			<?php //echo '<hr>'  ?>
			
			
					
		<?php } ?>
		

	<?php endforeach?>

	<?php echo '</br>'  ?>

<?php endforeach?>

<?php echo '</br>' ?>
<?php $this->widget('CLinkPager',array('pages'=>$districtDataProvider->pagination))?>


<?php /*$this->widget('zii.widgets.grid.CGridView',array(
	'dataProvider' => $dataProvider,
	'columns' => array(
		'id',
		'family_name',
		//'house_name',
		'house_number',
		'address_line1',
	),
	)) */ ?>
	
	
	
	
	
	
<?php //echo '('.$family->district_id.') - '  ?>
<?php //echo '('.$family->district->district_name.') - '  ?>
<?php //echo $family->family_name.', '  ?>
<?php //echo $family->address_line1.','  ?>
