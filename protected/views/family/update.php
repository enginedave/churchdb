<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Family', 'url'=>array('index')),
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'View Family', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Family', 'url'=>array('admin')),
);
?>

<h2>Update <?php echo $model->family_name; ?> Family Details</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
