<?php
$this->breadcrumbs=array(
	'Marital Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MaritalStatus', 'url'=>array('index')),
	array('label'=>'Manage MaritalStatus', 'url'=>array('admin')),
);
?>

<h1>Create MaritalStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>