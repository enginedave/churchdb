<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);
?>



<h1>Manage Users</h1>



<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'user-grid',
	'type'=>'bordered striped condensed',
	'dataProvider'=>$model->search(),
	'template'=>"{summary}{items}{pager}",
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'username',
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}{view}',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
		'email',
		//'password',
		//'role_id',
		array
						(
							'name'=>'role_id',
							'header'=>'theRole',
							//'value'=>CHtml::encode($model->getRoleText()),
							'value'=>'$data->getRoleText()'
						),
		/*
		'last_login_time',
		'create_time',
		
		'create_user_id',
		'update_time',
		'update_user_id',
		*/
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{delete}',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
	
)); ?>



<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Create User',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
    'url'=>array('create'),
)); ?></br></br>



