<?php
$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Salutation', 'url'=>array('index')),
	array('label'=>'Create Salutation', 'url'=>array('create')),
	array('label'=>'Update Salutation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salutation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salutation', 'url'=>array('admin')),
);
?>

<h1>View Salutation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salutation',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
