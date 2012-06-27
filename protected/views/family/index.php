<?php  /*

//this top section represents the original index section

$this->breadcrumbs=array(
	'Familys',
);

$this->menu=array(
	array('label'=>'Create Family', 'url'=>array('create')),
	array('label'=>'Manage Family', 'url'=>array('admin')),
);
?>

<h1>Familys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/   ?>


<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Family', 'url'=>array('index')),
	array('label'=>'Create Family', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('family-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>List of Familys</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'family-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	
	//this cssFile ref does not seem to work!
	/*href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />				*/
	//'cssFile' =>  '/css/gridview/style.css',
	'columns'=>array(
		//'id',
		
	
		
	//	array(
	//		'name'=>'family_name',
	//		'type'=>'raw',
	//		'value'=>'CHtml::link("$model->id","index.php?r=admin/edit/id/".CHtml::encode($model->id))'
	//	
	//	),
		
		
		
		
		
		
		
		'family_name',
		//'house_name',
		'house_number',
		'address_line1',
		//'address_line2',
		//'city',
		//'region',
		//'postcode',
		//'country',
		'telephone',
		'district.district_name',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
		//
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{view}',
		),
	),
)); ?>
