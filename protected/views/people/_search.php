<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

	

<div class="row">
	<div class="span2"><?php echo $form->label($model,'first_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->label($model,'middle_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>100)); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'last_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->label($model,'maiden_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'maiden_name',array('size'=>60,'maxlength'=>100)); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'nick_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<hr/>

<div class="row">
	<div class="span2"><?php echo $form->label($model,'mobile_number'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'mobile_number',array('size'=>30,'maxlength'=>30)); ?></div>
	<div class="span2"><?php echo $form->label($model,'work_number'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'work_number',array('size'=>30,'maxlength'=>30)); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'email_address1'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'email_address1',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->label($model,'email_address2'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'email_address2',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<hr/>

<div class="row">
	<div class="span2"><?php echo $form->label($model,'date_of_birth'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_birth'); ?></div>
	<div class="span2"><?php echo $form->label($model,'date_of_baptism'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_baptism'); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'date_of_joining'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_joining'); ?></div>
	<div class="span2"><?php echo $form->label($model,'date_of_membership'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_membership'); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'date_of_leaving'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_leaving'); ?></div>
	<div class="span2"><?php echo $form->label($model,'date_of_wedding'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_wedding'); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'date_of_death'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'date_of_death'); ?></div>
</div>

<hr/>

<div class="row">
	<div class="span2"><?php echo $form->label($model,'previous_church_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'previous_church_id', CHtml::listData(PreviousChurch::model()->findAll(), 'id', 'church_name'), array('prompt'=>'(Select a Previous Church)')); ?></div>
	<div class="span2"><?php echo $form->label($model,'next_church_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'next_church_id', CHtml::listData(NextChurch::model()->findAll(), 'id', 'church_name'), array('prompt'=>'(Select a Next Church)')); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'marital_status_id'); ?></div>
	<div class="span3"><?php //echo $form->textField($model,'marital_status_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'marital_status_id', CHtml::listData(MaritalStatus::model()->findAll(), 'id', 'marital_status_type'), array('prompt'=>'(Select)')); ?></div>
	<div class="span2"><?php echo $form->label($model,'gender'); ?></div>
	<div class="span3"><?php //echo $form->textField($model,'gender'); ?></div>
	<div class="span3"><?php echo $form->radioButtonList($model,'gender',(array(0=>'Female', 1=>'Male'))); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'head_of_house'); ?></div>
	<div class="span3"><?php //echo $form->textField($model,'head_of_house'); ?></div>
	<div class="span3"><?php echo $form->radioButtonList($model,'head_of_house',(array(0=>'No', 1=>'Yes'))); ?></div>
	<div class="span2"><?php echo $form->label($model,'membership_status_id'); ?></div>
	<div class="span3"><?php //echo $form->textField($model,'membership_status_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'membership_status_id', CHtml::listData(MembershipStatus::model()->findAll(), 'id', 'membership_type'), array('prompt'=>'(Select)')); ?></div>
</div>
<div class="row">
	<div class="span2"><?php echo $form->label($model,'grave_plot'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'grave_plot',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->label($model,'gift_aid'); ?></div>
	<div class="span3"><?php echo $form->radioButtonList($model,'gift_aid',(array(0=>'No', 1=>'Yes'))); ?></div>
</div>
<div class="row">
	<div class="span2 offset2"><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'search', 'label'=>'Search')); ?></div>
	<div class="span3"></div>
	<div class="span2"></div>
	<div class="span3"></div>
</div>




<?php $this->endWidget(); ?>

</div><!-- search-form -->
