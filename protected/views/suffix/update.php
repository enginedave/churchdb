<?php
$this->breadcrumbs=array(
	'Suffixes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Suffix', 'url'=>array('index')),
	array('label'=>'Create Suffix', 'url'=>array('create')),
	array('label'=>'View Suffix', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Suffix', 'url'=>array('admin')),
);
?>

<h1>Update Suffix <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>