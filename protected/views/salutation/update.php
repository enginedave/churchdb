<?php
$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salutation', 'url'=>array('index')),
	array('label'=>'Create Salutation', 'url'=>array('create')),
	array('label'=>'View Salutation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salutation', 'url'=>array('admin')),
);
?>

<h1>Update Salutation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>