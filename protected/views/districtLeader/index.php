<?php
$this->breadcrumbs=array(
	'District Leaders',
);

$this->menu=array(
	array('label'=>'Create DistrictLeader', 'url'=>array('create')),
	array('label'=>'Manage DistrictLeader', 'url'=>array('admin')),
);
?>

<h1>District Leaders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
