<?php
$this->breadcrumbs=array(
	'Previous Churches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreviousChurch', 'url'=>array('index')),
	array('label'=>'Create PreviousChurch', 'url'=>array('create')),
	array('label'=>'View PreviousChurch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreviousChurch', 'url'=>array('admin')),
);
?>

<h1>Update PreviousChurch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>