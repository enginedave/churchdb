<?php
$this->breadcrumbs=array(
	'Membership Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MembershipStatus', 'url'=>array('index')),
	array('label'=>'Create MembershipStatus', 'url'=>array('create')),
	array('label'=>'View MembershipStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MembershipStatus', 'url'=>array('admin')),
);
?>

<h1>Update MembershipStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>