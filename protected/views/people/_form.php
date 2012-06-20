<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'people-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'family_id'); ?>
		<?php //echo $form->textField($model,'family_id'); ?>
		<?php //echo $form->dropDownList($model,'family_id', CHtml::listData(Family::model()->findAll(), 'id', 'family_name')); ?>
		<?php //echo $form->error($model,'family_id'); ?>
		<?php echo $form->hiddenField($model,'family_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salutation_id'); ?>
		<?php //echo $form->textField($model,'salutation_id'); ?>
		<?php echo $form->dropDownList($model,'salutation_id', CHtml::listData(Salutation::model()->findAll(), 'id', 'salutation')); ?>
		<?php echo $form->error($model,'salutation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maiden_name'); ?>
		<?php echo $form->textField($model,'maiden_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maiden_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suffix_id'); ?>
		<?php //echo $form->textField($model,'suffix_id'); ?>
		<?php echo $form->dropDownList($model,'suffix_id', CHtml::listData(Suffix::model()->findAll(), 'id', 'suffix')); ?>
		<?php echo $form->error($model,'suffix_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nick_name'); ?>
		<?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nick_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_number'); ?>
		<?php echo $form->textField($model,'work_number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'work_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address1'); ?>
		<?php echo $form->textField($model,'email_address1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address2'); ?>
		<?php echo $form->textField($model,'email_address2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php //echo $form->textField($model,'gender'); ?>
		<?php echo $form->radioButtonList($model,'gender',(array(0=>'Female', 1=>'Male'))); ?>
		<?php //echo $form->checkBoxList($model,'gender',(array('Male'=>0, 'Female'=>1))); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'head_of_house'); ?>
		<?php echo $form->checkBox($model,'head_of_house'); ?>
		<?php echo $form->error($model,'head_of_house'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php //echo $form->textField($model,'date_of_birth'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_birth',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_baptism'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_baptism',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_baptism'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'previous_church_id'); ?>
		<?php //echo $form->textField($model,'previous_church_id'); ?>
		<?php echo $form->dropDownList($model,'previous_church_id', CHtml::listData(PreviousChurch::model()->findAll(), 'id', 'church_name')); ?>
		<?php echo $form->error($model,'previous_church_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_joining'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_joining',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_joining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_status_id'); ?>
		<?php //echo $form->textField($model,'membership_status_id'); ?>
		<?php echo $form->dropDownList($model,'membership_status_id', CHtml::listData(MembershipStatus::model()->findAll(), 'id', 'membership_type')); ?>
		<?php echo $form->error($model,'membership_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_membership'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_membership',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_membership'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'next_church_id'); ?>
		<?php //echo $form->textField($model,'next_church_id'); ?>
		<?php echo $form->dropDownList($model,'next_church_id', CHtml::listData(NextChurch::model()->findAll(), 'id', 'church_name')); ?>
		<?php echo $form->error($model,'next_church_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_leaving'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_leaving',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_leaving'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital_status_id'); ?>
		<?php //echo $form->textField($model,'marital_status_id'); ?>
		<?php echo $form->dropDownList($model,'marital_status_id', CHtml::listData(MaritalStatus::model()->findAll(), 'id', 'marital_status_type')); ?>
		<?php echo $form->error($model,'marital_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_wedding'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_wedding',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_wedding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_death'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'date_of_death',
					// additional javascript options for the date picker plugin
					'options' => array(
						'showAnim' => 'clip',
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'defaultDate'=>null,
					),
					'htmlOptions' => array(
					'style' => 'height:16px;'
					),
				));   ?>
		<?php echo $form->error($model,'date_of_death'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grave_plot'); ?>
		<?php echo $form->textField($model,'grave_plot',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'grave_plot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gift_aid'); ?>
		<?php echo $form->checkBox($model,'gift_aid'); ?>
		<?php //echo $form->dropDownList($model,'gift_aid', CHtml::listData((array(0=>'first',1=>'second')), 'id', 'gift_aid')); ?>
		<?php //echo $form->dropDownList($model,'salutation_id', CHtml::listData(Salutation::model()->findAll(), 'id', 'salutation')); ?>
		<?php echo $form->error($model,'gift_aid'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
