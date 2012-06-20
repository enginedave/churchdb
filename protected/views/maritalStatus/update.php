<?php
$this->breadcrumbs=array(
	'Marital Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MaritalStatus', 'url'=>array('index')),
	array('label'=>'Create MaritalStatus', 'url'=>array('create')),
	array('label'=>'View MaritalStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MaritalStatus', 'url'=>array('admin')),
);
?>

<h1>Update MaritalStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>