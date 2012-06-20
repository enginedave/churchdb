<?php
$this->breadcrumbs=array(
	'Previous Churches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreviousChurch', 'url'=>array('index')),
	array('label'=>'Manage PreviousChurch', 'url'=>array('admin')),
);
?>

<h1>Create PreviousChurch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>