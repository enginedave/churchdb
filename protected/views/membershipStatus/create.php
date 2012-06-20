<?php
$this->breadcrumbs=array(
	'Membership Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MembershipStatus', 'url'=>array('index')),
	array('label'=>'Manage MembershipStatus', 'url'=>array('admin')),
);
?>

<h1>Create MembershipStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>