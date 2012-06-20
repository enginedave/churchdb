<?php
$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List People', 'url'=>array('index')),
	//array('label'=>'Create People', 'url'=>array('create')),
	array('label'=>'Update People', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete People', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage People', 'url'=>array('admin')),
	array('label'=>'View Family', 'url'=>array('family/view', 'id'=>$model->family_id)),
);
?>

<h1>View People #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'family_id',
		array
		(
			'name'=>'family_id',
			'value'=>CHtml::encode($model->family->family_name),
		),
		//'salutation_id',
		array
		(
			'name'=>'salutation_id',
			'value'=>CHtml::encode($model->salutation->salutation),
		),
		'first_name',
		'middle_name',
		'last_name',
		'maiden_name',
		//'suffix_id',
		array
		(
			'name'=>'suffix_id',
			'value'=>CHtml::encode($model->suffix->suffix),
		),
		'nick_name',
		'mobile_number',
		'work_number',
		'email_address1',
		'email_address2',
		//'gender',
		array
		(
			'name'=>'gender',
			'value'=>CHtml::encode($model->getGenderText()),
		),
		//'head_of_house',
		array
		(
			'name'=>'head_of_house',
			'value'=>CHtml::encode($model->getHeadOfHouseText()),
		),
		'date_of_birth',
		'date_of_baptism',
		//'previous_church_id',
		array
		(
			'name'=>'previous_church_id',
			'value'=>CHtml::encode($model->previousChurch->church_name),
		),
		'date_of_joining',
		//'membership_status_id',
		array
		(
			'name'=>'membership_status_id',
			'value'=>CHtml::encode($model->membershipStatus->membership_type),
		),
		'date_of_membership',
		//'next_church_id',
		array
		(
			'name'=>'next_church_id',
			'value'=>CHtml::encode($model->nextChurch->church_name),
		),
		'date_of_leaving',
		//'marital_status_id',
		array
		(
			'name'=>'marital_status_id',
			'value'=>CHtml::encode($model->maritalStatus->marital_status_type),
		),
		'date_of_wedding',
		'date_of_death',
		'grave_plot',
		'notes',
		//'gift_aid',
		array
		(
			'name'=>'gift_aid',
			'value'=>CHtml::encode($model->getGiftAidText()),
		),
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
