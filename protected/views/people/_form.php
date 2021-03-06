<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'people-form',
	'enableAjaxValidation'=>false,
	
	'type'=>'horizontal',
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'well'),
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

<!--  
// start of the main form 
-->

<div class="row">
	<div class="span2 offset2"><?php echo $form->labelEx($model,'first_name'); ?></div>
	<div class="span2"><?php echo $form->labelEx($model,'middle_name'); ?></div>
	<div class="span3">Family Name</div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->dropDownList($model,'salutation_id', CHtml::listData(Salutation::model()->findAll(), 'id', 'salutation'), array('style'=>'width: 90px;')); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100,'style'=>'width: 130px;')); ?></div>
	<div class="span2"><?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>100,'style'=>'width: 130px;')); ?></div>
	<div class="span2"><?php echo $form->textField($model,'family_id',array('value'=>$model->family->family_name,'size'=>60,'maxlength'=>100, 'disabled'=>true,'style'=>'width: 130px;')); ?></div>
	<div class="span2"><?php echo $form->dropDownList($model,'suffix_id', CHtml::listData(Suffix::model()->findAll(), 'id', 'suffix'), array('style'=>'width: 80px;')); ?></div>
</div>

<div class="row">
	<div class="span2 offset4"><p class="pull-right"><?php echo $form->labelEx($model,'last_name'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100,'style'=>'width: 130px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'head_of_house'); ?></p></div>
	<div class="span2"><?php echo $form->checkBox($model,'head_of_house'); ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'maiden_name'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'maiden_name',array('size'=>60,'maxlength'=>100,'style'=>'width: 130px;')); ?></div>
	
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'gift_aid'); ?></p></div>
	<div class="span2"><?php echo $form->checkBox($model,'gift_aid'); ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'nick_name'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'nick_name',array('size'=>60,'maxlength'=>100,'style'=>'width: 130px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'gender'); ?></p></div>
	<div class="span2"><?php echo $form->radioButtonList($model,'gender',(array(0=>'Female', 1=>'Male'))); ?></div>
</div>

<hr/>

<!--  
// start of the contact information for the person
-->

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'mobile_number'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'mobile_number',array('size'=>30,'maxlength'=>30,'style'=>'width: 130px;')); ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'email_address1'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'email_address1',array('size'=>60,'maxlength'=>100,'style'=>'width: 200px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'work_number'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'work_number',array('size'=>30,'maxlength'=>30,'style'=>'width: 130px;')); ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'email_address2'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'email_address2',array('size'=>60,'maxlength'=>100,'style'=>'width: 200px;')); ?></div>
</div>

<hr/>

<!--  
// start of relevant dates and other information
-->

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_birth'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"></div>
	<div class="span2"></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_baptism'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"></div>
	<div class="span2"></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_joining'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'previous_church_id'); ?></p></div>
	<div class="span2"><?php echo $form->dropDownList($model,'previous_church_id', CHtml::listData(PreviousChurch::model()->findAll(), 'id', 'church_name'), array('style'=>'width: 210px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_membership'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'membership_status_id'); ?></p></div>
	<div class="span2"><?php echo $form->dropDownList($model,'membership_status_id', CHtml::listData(MembershipStatus::model()->findAll(), 'id', 'membership_type'), array('style'=>'width: 210px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_leaving'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'next_church_id'); ?></p></div>
	<div class="span2"><?php echo $form->dropDownList($model,'next_church_id', CHtml::listData(NextChurch::model()->findAll(), 'id', 'church_name'), array('style'=>'width: 210px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_wedding'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'marital_status_id'); ?></p></div>
	<div class="span2"><?php echo $form->dropDownList($model,'marital_status_id', CHtml::listData(MaritalStatus::model()->findAll(), 'id', 'marital_status_type'), array('style'=>'width: 210px;')); ?></div>
</div>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'date_of_death'); ?></p></div>
	<div class="span2"><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
					'style' => 'width: 130px;'
					),
				));   ?></div>
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'grave_plot'); ?></p></div>
	<div class="span2"><?php echo $form->textField($model,'grave_plot',array('size'=>60,'maxlength'=>100,'style'=>'width: 200px;')); ?></div>
</div>

<hr/>

<div class="row">
	<div class="span2"><p class="pull-right"><?php echo $form->labelEx($model,'notes'); ?></p></div>
	<div class="span6"><?php echo $form->textArea($model,'notes',array('rows'=>5, 'cols'=>50, 'style'=>'width: 520px;')); ?></div>
</div>

<div class="form-actions"> 
    <?php $this->widget('bootstrap.widgets.TbButton', array( 
        'buttonType'=>'submit', 
        'type'=>'primary', 
        'label'=>$model->isNewRecord ? 'Create' : 'Save', 
    )); ?>
</div> 

<?php $this->endWidget(); ?>

</div><!-- form -->
