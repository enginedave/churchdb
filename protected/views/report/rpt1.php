<?php
$this->breadcrumbs=array(
	'Families',
);

$this->menu=array(
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
);
?>

<h1>Family Report</h1>

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

<?php foreach($dataProvider->data as $family):?>

<?php echo $family->district->districtLeaders->name.' '  ?>
<?php echo '('.$family->district_id.') - '  ?>
<?php echo '('.$family->district->district_name.') - '  ?>
<?php echo $family->family_name.', '  ?>
<?php echo $family->address_line1.','  ?>


<?php echo '</br>'  ?>
<?php endforeach?>
<?php echo '</br>' ?>
<?php $this->widget('CLinkPager',array('pages'=>$dataProvider->pagination))?>


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
