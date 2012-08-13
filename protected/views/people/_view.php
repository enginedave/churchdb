<div class="view row">

	<!--format of the name
	<!--Mr Joe Barney Blogs Jnr (nickey) (age:56) (Member)   -->
	
	<?php //echo CHtml::encode($data->salutation->salutation).' '; ?>
	<?php //echo CHtml::encode($data->first_name).' '; ?>
	<?php //echo CHtml::encode($data->middle_name).' '; ?>
	<?php //echo CHtml::encode($data->family->family_name).' '; ?>



	
<div class="span2">	
	<?php echo CHtml::link(CHtml::encode($data->salutation->salutation.' '.$data->first_name.' '.$data->family->family_name), array('people/view', 'id'=>$data->id)); ?>
	
</div>

<div class="span1">
<?php echo CHtml::encode('('.$data->membershipStatus->membership_type.')'); ?>
</div>

<div class="span2">
	<?php echo CHtml::encode('T: '.$data->mobile_number).' '; ?>
</div>	

<div class="span3">
	<?php echo CHtml::encode('E:'.$data->email_address1).' '; ?>
</div>
<div class="span1">
	<?php echo CHtml::encode('Age:'.$data->date_of_birth); ?>
	</div>
	<div class="span2">
	<?php echo CHtml::encode('('.$data->maritalStatus->marital_status_type.')'); ?>
	</div>
	

	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('people/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_id')); ?>:</b>
	<?php echo CHtml::encode($data->family_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salutation_id')); ?>:</b>
	<?php echo CHtml::encode($data->salutation->salutation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maiden_name')); ?>:</b>
	<?php echo CHtml::encode($data->maiden_name); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('suffix_id')); ?>:</b>
	<?php echo CHtml::encode($data->suffix_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick_name')); ?>:</b>
	<?php echo CHtml::encode($data->nick_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_number')); ?>:</b>
	<?php echo CHtml::encode($data->work_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address1')); ?>:</b>
	<?php echo CHtml::encode($data->email_address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address2')); ?>:</b>
	<?php echo CHtml::encode($data->email_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('head_of_house')); ?>:</b>
	<?php echo CHtml::encode($data->head_of_house); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_baptism')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_baptism); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_church_id')); ?>:</b>
	<?php echo CHtml::encode($data->previous_church_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_joining')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_joining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_membership')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_membership); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_church_id')); ?>:</b>
	<?php echo CHtml::encode($data->next_church_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_leaving')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_leaving); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_wedding')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_wedding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grave_plot')); ?>:</b>
	<?php echo CHtml::encode($data->grave_plot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gift_aid')); ?>:</b>
	<?php echo CHtml::encode($data->gift_aid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>
