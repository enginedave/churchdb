<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Family', 'url'=>array('index')),
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'Update Family', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Family', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
	array('label'=>'Create People', 'url'=>array('People/create','fid'=>$model->id)), // need this to pass the id of the family for which the person is created.
);
?>

<h1>The <?php echo CHtml::encode($model->family_name); ?> Family Details </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'family_name',
		'house_name',
		'house_number',
		'address_line1',
		'address_line2',
		'city',
		'region',
		'postcode',
		'country',
		'telephone',
		'district.district_name',	//previously 'district_id'
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
<br>
<h1>List of Family Members</h1>

<?php $this->widget('zii.widgets.CListView', array
		(
			'dataProvider'=>$peopleDataProvider,
			'itemView'=>'/people/_view',
		)
		);



?>



