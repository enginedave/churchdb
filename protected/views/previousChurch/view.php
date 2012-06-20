<?php
$this->breadcrumbs=array(
	'Previous Churches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PreviousChurch', 'url'=>array('index')),
	array('label'=>'Create PreviousChurch', 'url'=>array('create')),
	array('label'=>'Update PreviousChurch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PreviousChurch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PreviousChurch', 'url'=>array('admin')),
);
?>

<h1>View PreviousChurch #<?php echo $model->id; ?></h1>

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
