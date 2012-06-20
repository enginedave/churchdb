<?php
$this->breadcrumbs=array(
	'Next Churches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NextChurch', 'url'=>array('index')),
	array('label'=>'Manage NextChurch', 'url'=>array('admin')),
);
?>

<h1>Create NextChurch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>