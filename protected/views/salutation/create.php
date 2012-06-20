<?php
$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salutation', 'url'=>array('index')),
	array('label'=>'Manage Salutation', 'url'=>array('admin')),
);
?>

<h1>Create Salutation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>