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

<!-- main heading ------------------------->
<h2>Details for <?php echo CHtml::encode($model->salutation->salutation.' '.$model->first_name.' '.$model->middle_name.' '.$model->family->family_name.' '.$model->suffix->suffix); ?></h2>


<!--the class="row" and the span4 are classes for the bootstrap grid not the blue print grid. NOTE the blueprint css framework can probably be deleted and use the one provided with bootstrap-->
<div class="row">
	<div class="span3">
		<h3>Picture</h3>
		<p class="well"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/personpic.jpg" alt="Family Picture" height="130" width="130" /></p>
	</div>
	
	<div class="span4">
		<h3>Name Info</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				//'id',
				'nick_name',
				array(
					'name'=>'Family Name',
					'type'=>'raw',
					'value'=>CHtml::link(CHtml::encode($model->family->family_name), array('family/view', 'id'=>$model->family_id)),			
				),
				//'family.family_name',
				'last_name',
				'maiden_name',
				array
						(
							'name'=>'gender',
							'value'=>CHtml::encode($model->getGenderText()),
						),
			),
		)); ?>
	</div>
	
	<div class="span5">
		<h3>Contact Details</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				//'family.telephone',
				array(
					'name'=>'Family Number',
					'value'=>CHtml::encode($model->family->telephone),
				),
				'mobile_number',
				'work_number',
				//'email_address1',
				array(
					'name'=>'Email Address',
					'value'=>CHtml::encode($model->email_address1),
				),
				//'email_address2',
				array(
					'name'=>'Alternate Email',
					'value'=>CHtml::encode($model->email_address2),
				),
				
				//'district.notes',
				//array(
				//		'label'=>'District Leader',
				//		'value'=> $model->district->districtLeaders->name
					//),
			),
		)); ?>
	</div>
	
</div><!-- the end of the top row -->

<div class="row">
	<div class="span6">
		<h3>Other Info</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				//'head_of_house',
				array
				(
					'name'=>'membership_status_id',
					'value'=>CHtml::encode($model->membershipStatus->membership_type),
				),
				array
				(
					'name'=>'marital_status_id',
					'value'=>CHtml::encode($model->maritalStatus->marital_status_type),
				),
				//'previous_church_id',
				array
				(
					'name'=>'previous_church_id',
					'value'=>CHtml::encode($model->previousChurch->church_name),
				),
				array
				(
					'name'=>'next_church_id',
					'value'=>CHtml::encode($model->nextChurch->church_name),
				),
				//'membership_status_id',
				
				
				//'next_church_id',
				array
				(
					'name'=>'head_of_house',
					'value'=>CHtml::encode($model->getHeadOfHouseText()),
				),
				
			
				//'marital_status_id',
				
			
				'grave_plot',
				//'notes',
				//'gift_aid',
				array
				(
					'name'=>'gift_aid',
					'value'=>CHtml::encode($model->getGiftAidText()),
				),
			
			),
		)); ?>	
		

		
		
	</div>
	<div class="span6">
		<h3>Date Info</h3>
		<?php $this->widget('bootstrap.widgets.TbDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				array
				(
					'name'=>'Date of birth',
					'value'=>CHtml::encode($model->date_of_birth.' Age:'.$model->getAgeOfPerson()),
				),
				//'date_of_birth',
				'date_of_baptism',
				'date_of_joining',
				'date_of_membership',
				'date_of_leaving',
				'date_of_wedding',
				'date_of_death',
			),
		)); ?>
		
		
	</div>
</div><!-- the of the second row -->


<div class="row">
	<div class="span12">
		<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    		//'heading'=>'Notes',
			)); ?>
			<h3>Notes</h3>
    		<p style="font-size: 0.9em;"><?php echo CHtml::encode($model->notes); ?></p>
    		
    		
    		
    		
		<?php $this->endWidget(); ?>
		
		
		
	</div>
</div>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'label'=>'Update Details',
	'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	'size'=>'small', // null, 'large', 'small' or 'mini'
	
	
	'url'=>array('update', 'id'=>$model->id),
				
)); ?></br></br>











