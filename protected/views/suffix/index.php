<?php
$this->breadcrumbs=array(
	'Suffixes',
);

$this->menu=array(
	array('label'=>'Create Suffix', 'url'=>array('create')),
	array('label'=>'Manage Suffix', 'url'=>array('admin')),
);
?>

<h1>Suffixes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
