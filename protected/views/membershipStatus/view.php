<?php
$this->breadcrumbs=array(
	'Membership Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MembershipStatus', 'url'=>array('index')),
	array('label'=>'Create MembershipStatus', 'url'=>array('create')),
	array('label'=>'Update MembershipStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MembershipStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MembershipStatus', 'url'=>array('admin')),
);
?>

<h1>View MembershipStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'membership_type',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
