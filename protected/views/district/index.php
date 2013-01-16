<?php
$this->breadcrumbs=array(
	'Districts',
);

$this->menu=array(
	array('label'=>'Create District','url'=>array('create')),
	array('label'=>'Manage District','url'=>array('admin')),
);
?>

<h1>Districts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
