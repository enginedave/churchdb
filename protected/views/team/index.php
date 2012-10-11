<?php
$this->breadcrumbs=array(
	'Teams',
);

$this->menu=array(
	array('label'=>'Create Team', 'url'=>array('create')),
	array('label'=>'Manage Team', 'url'=>array('admin')),
);
?>

<h1>Teams</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
