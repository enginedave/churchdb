<?php
$this->breadcrumbs=array(
	'Suffixes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Suffix', 'url'=>array('index')),
	array('label'=>'Manage Suffix', 'url'=>array('admin')),
);
?>

<h1>Create Suffix</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>