<?php
$this->breadcrumbs=array(
	'Previous Churches',
);

$this->menu=array(
	array('label'=>'Create PreviousChurch', 'url'=>array('create')),
	array('label'=>'Manage PreviousChurch', 'url'=>array('admin')),
);
?>

<h1>Previous Churches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
