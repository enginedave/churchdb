<?php
$this->breadcrumbs=array(
	'District Leaders'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DistrictLeader', 'url'=>array('index')),
	array('label'=>'Create DistrictLeader', 'url'=>array('create')),
	array('label'=>'View DistrictLeader', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DistrictLeader', 'url'=>array('admin')),
);
?>

<h1>Update DistrictLeader <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>