<?php
$this->breadcrumbs=array(
	'Marital Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MaritalStatus', 'url'=>array('index')),
	array('label'=>'Create MaritalStatus', 'url'=>array('create')),
	array('label'=>'Update MaritalStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MaritalStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MaritalStatus', 'url'=>array('admin')),
);
?>

<h1>View MaritalStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marital_status_type',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
