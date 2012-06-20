<?php
$this->breadcrumbs=array(
	'Next Churches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NextChurch', 'url'=>array('index')),
	array('label'=>'Create NextChurch', 'url'=>array('create')),
	array('label'=>'View NextChurch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NextChurch', 'url'=>array('admin')),
);
?>

<h1>Update NextChurch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>