<?php
$this->breadcrumbs=array(
	'Membership Statuses',
);

$this->menu=array(
	array('label'=>'Create MembershipStatus', 'url'=>array('create')),
	array('label'=>'Manage MembershipStatus', 'url'=>array('admin')),
);
?>

<h1>Membership Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
