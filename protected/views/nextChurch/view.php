<?php
$this->breadcrumbs=array(
	'Next Churches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NextChurch', 'url'=>array('index')),
	array('label'=>'Create NextChurch', 'url'=>array('create')),
	array('label'=>'Update NextChurch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NextChurch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NextChurch', 'url'=>array('admin')),
);
?>

<h1>View NextChurch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'church_name',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
