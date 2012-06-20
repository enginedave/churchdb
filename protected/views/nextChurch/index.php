<?php
$this->breadcrumbs=array(
	'Next Churches',
);

$this->menu=array(
	array('label'=>'Create NextChurch', 'url'=>array('create')),
	array('label'=>'Manage NextChurch', 'url'=>array('admin')),
);
?>

<h1>Next Churches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
