<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_id'); ?>
		<?php echo $form->textField($model,'family_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salutation_id'); ?>
		<?php echo $form->textField($model,'salutation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maiden_name'); ?>
		<?php echo $form->textField($model,'maiden_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suffix_id'); ?>
		<?php echo $form->textField($model,'suffix_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nick_name'); ?>
		<?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'work_number'); ?>
		<?php echo $form->textField($model,'work_number',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_address1'); ?>
		<?php echo $form->textField($model,'email_address1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_address2'); ?>
		<?php echo $form->textField($model,'email_address2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'head_of_house'); ?>
		<?php echo $form->textField($model,'head_of_house'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_baptism'); ?>
		<?php echo $form->textField($model,'date_of_baptism'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previous_church_id'); ?>
		<?php echo $form->textField($model,'previous_church_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_joining'); ?>
		<?php echo $form->textField($model,'date_of_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membership_status_id'); ?>
		<?php echo $form->textField($model,'membership_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_membership'); ?>
		<?php echo $form->textField($model,'date_of_membership'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'next_church_id'); ?>
		<?php echo $form->textField($model,'next_church_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_leaving'); ?>
		<?php echo $form->textField($model,'date_of_leaving'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marital_status_id'); ?>
		<?php echo $form->textField($model,'marital_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_wedding'); ?>
		<?php echo $form->textField($model,'date_of_wedding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_death'); ?>
		<?php echo $form->textField($model,'date_of_death'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grave_plot'); ?>
		<?php echo $form->textField($model,'grave_plot',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gift_aid'); ?>
		<?php echo $form->textField($model,'gift_aid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->