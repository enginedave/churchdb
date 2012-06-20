<?php
$this->breadcrumbs=array(
	'District Leaders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DistrictLeader', 'url'=>array('index')),
	array('label'=>'Manage DistrictLeader', 'url'=>array('admin')),
);
?>

<h1>Create DistrictLeader</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>