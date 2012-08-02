


<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
        array('label'=>'Create Family', 'url'=>array('create')),
        //array('label'=>'another button', 'url'=>'#'),
        //array('label'=>'another button', 'url'=>'#'),
    ),
    'htmlOptions'=>array('style'=>'float: right;'),
    'type'=>'success',
    'size'=>'small',    
)); ?>














<?php



	$this->breadcrumbs=array(
		'Familys'=>array('index'),
		'Manage',
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








<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'family-grid',
    'type'=>'bordered striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{summary}{items}{pager}",
	'filter'=>$model,
	'cssFile' => Yii::app()->theme->baseUrl.'/css/gridview/styles.css',
    'columns'=>array(
        array('name'=>'family_name', 'header'=>'Family Name'),
        array('name'=>'house_number', 'header'=>'No', 'htmlOptions'=>array('style'=>'width: 75px; text-align: right;')),
        array('name'=>'address_line1', 'header'=>'Address'),
        array('name'=>'telephone', 'header'=>'Tel'),
		array('name'=>'district.district_name', 'header'=>'District'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}{view}',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>








