<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('District Leader')); ?>:</b>
	<?php echo CHtml::encode($data->district->districtLeaders->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('district_id')); ?>:</b>
	<?php echo CHtml::encode($data->district_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('district_id')); ?>:</b>
	<?php echo CHtml::encode($data->district->district_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->family_name), array('view', 'id'=>$data->id)); ?>
	<?php //echo CHtml::encode($data->family_name); ?>
	<br />
	
	
	
	
	
	

<?php /*
NOTE on how to reference another object

e.g. $data->district->districtLeaders->name

$data - refers to the object in this case the Family object
district - refers to the relationship defined in the Family model pointing to the District model
districtLeaders - refers to the relationship defined in the District model pointing to the DistrictLeaders model
name - refers to the column name in tbl_district_leader


*/  ?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('house_name')); ?>:</b>
	<?php echo CHtml::encode($data->house_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_number')); ?>:</b>
	<?php echo CHtml::encode($data->house_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_line1')); ?>:</b>
	<?php echo CHtml::encode($data->address_line1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_line2')); ?>:</b>
	<?php echo CHtml::encode($data->address_line2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('district_id')); ?>:</b>
	<?php echo CHtml::encode($data->district_id); ?>
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
