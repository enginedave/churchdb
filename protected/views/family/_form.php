<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'family-form',
	'enableAjaxValidation'=>false,
	
	
	

	'id'=>'verticalForm',
	//'type'=>'horizontal',
	'htmlOptions'=>array('class'=>'well'),
	
	
	
	
	
)); ?>



<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>


<div class="row">
	<div class="span2"><?php echo $form->labelEx($model,'family_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'family_name',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->labelEx($model,'house_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'house_name',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2"><?php echo $form->labelEx($model,'telephone'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'telephone',array('size'=>25,'maxlength'=>25)); ?></div>
	<div class="span2"><?php echo $form->labelEx($model,'house_number'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'house_number',array('size'=>10,'maxlength'=>10)); ?></div>
</div>

<div class="row">
	<div class="span2"><?php echo $form->labelEx($model,'district_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'district_id', CHtml::listData(District::model()->findAll(), 'id', 'district_name'), array('prompt'=>'(Select a District)')); ?></div>
	<div class="span2"><?php echo $form->labelEx($model,'address_line1'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'address_line1',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->labelEx($model,'address_line2'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'address_line2',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->labelEx($model,'city'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->labelEx($model,'region'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->labelEx($model,'postcode'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'postcode',array('size'=>20,'maxlength'=>20)); ?></div>
</div>

<div class="row">

	<div class="span3 offset2">
			<?php //echo CHtml::submitButton('Search'); ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Create')); ?>
	</div>
	<div class="span2"><?php echo $form->labelEx($model,'country'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?></div>
</div>























	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
</fieldset>

<?php $this->endWidget(); ?>

</div><!-- form -->
