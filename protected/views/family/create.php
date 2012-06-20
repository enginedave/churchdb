<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Family', 'url'=>array('index')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
);
?>

<h1>Create Family</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>