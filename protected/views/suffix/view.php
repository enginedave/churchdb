<?php
$this->breadcrumbs=array(
	'Suffixes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Suffix', 'url'=>array('index')),
	array('label'=>'Create Suffix', 'url'=>array('create')),
	array('label'=>'Update Suffix', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Suffix', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Suffix', 'url'=>array('admin')),
);
?>

<h1>View Suffix #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'suffix',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
