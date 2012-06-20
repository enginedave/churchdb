<?php
$this->breadcrumbs=array(
	'District Leaders'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DistrictLeader', 'url'=>array('index')),
	array('label'=>'Create DistrictLeader', 'url'=>array('create')),
	array('label'=>'Update DistrictLeader', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DistrictLeader', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DistrictLeader', 'url'=>array('admin')),
);
?>

<h1>View DistrictLeader #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		/*
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		*/
	),
)); ?>
