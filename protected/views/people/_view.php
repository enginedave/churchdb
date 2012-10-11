<li class="span4">


<div class="thumbnail">

	<?php echo CHtml::link(CHtml::encode($data->salutation->salutation.' '.$data->first_name.' '.$data->family->family_name.'  '), array('people/view', 'id'=>$data->id)); ?>
	
	<i><?php echo CHtml::encode('('.$data->membershipStatus->membership_type.')'); ?></i>
	<br />

	<?php echo CHtml::encode('T: '.$data->mobile_number).' '; ?>
	<br />

	<?php echo CHtml::encode('E: '.$data->email_address1).' '; ?>
	<br />

	<?php echo CHtml::encode('Age: '.$data->getAgeOfPerson()); ?>
	<br />
	
	<?php echo CHtml::encode('('.$data->maritalStatus->marital_status_type.')'); ?>
<br />
	</div>

</li>
