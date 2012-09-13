<?php
$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List People', 'url'=>array('index')),
	array('label'=>'Manage People', 'url'=>array('admin')),
);
?>

<h2>Add a person to the <?php echo CHtml::encode($model->family->family_name); ?> Family</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
