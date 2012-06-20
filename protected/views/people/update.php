<?php
$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List People', 'url'=>array('index')),
	array('label'=>'Create People', 'url'=>array('create')),
	array('label'=>'View People', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage People', 'url'=>array('admin')),
);
?>

<h1>Update People <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>