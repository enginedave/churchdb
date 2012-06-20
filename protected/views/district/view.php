<?php
$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List District', 'url'=>array('index')),
	array('label'=>'Create District', 'url'=>array('create')),
	array('label'=>'Update District', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete District', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage District', 'url'=>array('admin')),
);
?>

<h1>View District #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'district_name',
		array
		(
			'name'=>'district_leaders_id',
			'value'=>CHtml::encode($model->districtLeaders->name),
		),
		//'district_leaders_id',    //formerly 'district_leaders_id',
		'notes',
		/*
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		*/
	),
)); ?>
