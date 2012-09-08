


<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	$model->id,
);

?>




<?php
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
        array('label'=>'Update Family', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Create Family Member', 'url'=>array('People/create','fid'=>$model->id)),
        //array('label'=>'another button', 'url'=>'#'),
    ),
    'htmlOptions'=>array('style'=>'float: right;'),
    'type'=>'success',
    'size'=>'small',    
));

?>

<h2>Details for the <?php echo CHtml::encode($model->family_name); ?> Family</h2>



<!--the class="row" and the span4 are classes for the bootstrap grid not the blue print grid. NOTE the blueprint css framework can probably be deleted and use the one provided with bootstrap-->
<div class="row">
	<div class="span3">
		<h3>Picture</h3>
		<p class="well"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/familypic.jpg" alt="Family Picture" height="130" width="130" /></p>
	</div>
	<div class="span5">
		<h3>Address</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'family_name',
		'house_name',
		'house_number',
		'address_line1',
		'address_line2',
		'city',
		'region',
		'postcode',
		'country',
		//'telephone',
		//'district.district_name',	//previously 'district_id'
		//'district.district_leaders_id',
		//'district.district_leaders_id.name',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
	</div>
	<div class="span4">
		<h3>Other Info</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
			//'id',
			'telephone',
			'district.district_name',
			//'district.district_leaders_id',
			//'district.notes',
			array(
					'label'=>'District Leader',
					'value'=> $model->district->districtLeaders->name
				),
			),
			)); ?>
	</div>
	
	
	
	
	
	
	
</div>












<h2>List of Family Members</h2>





<?php $this->widget('bootstrap.widgets.TbListView', array
		(
			'dataProvider'=>$peopleDataProvider,
			'itemView'=>'/people/_view',
		)
		);



?>



