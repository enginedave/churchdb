

<?php
$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	'Manage',
);

//$this->menu=array(
	//array('label'=>'List People', 'url'=>array('index')),
	//array('label'=>'Create People', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('people-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>































<h1>List of  People</h1>

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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'people-grid',
	'type'=>'bordered striped condensed',
	'dataProvider'=>$model->search(),
	'template'=>"{summary}{items}{pager}",
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'family_id',
		'salutation.salutation',
		//'first_name',
		array('name'=>'first_name', 'header'=>'First Name', 'value'=>'CHtml::link($data->first_name, Yii::app()->createUrl("people/view",array("id"=>$data->primaryKey)))','type'=>'raw',),
		//'middle_name',
		'family.family_name',
		//'last_name',
		
		//'maiden_name',
		//'suffix_id',
		//'nick_name',
		'mobile_number',
		//'work_number',
		'email_address1',
		//'email_address2',
		/*
		'gender',
		'head_of_house',
		'date_of_birth',
		'date_of_baptism',
		'previous_church_id',
		'date_of_joining',
		'membership_status_id',
		'date_of_membership',
		'next_church_id',
		'date_of_leaving',
		'marital_status_id',
		'date_of_wedding',
		'date_of_death',
		'grave_plot',
		'notes',
		'gift_aid',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		*/
		array(
			//'class'=>'CButtonColumn',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}{view}',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
