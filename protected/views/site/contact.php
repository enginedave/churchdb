<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true,),
	'htmlOptions'=>array('class'=>'well'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


<fieldset>
<?php echo $form->textFieldRow($model, 'name', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'email', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'subject', array('size'=>60,'maxlength'=>128, 'class'=>'span5')); ?>
<?php echo $form->textAreaRow($model, 'body', array('class'=>'span8', 'rows'=>6, 'cols'=>50)); ?>
		
	
	
<?php if(CCaptcha::checkRequirements()): ?>	
	
<div class="control-group ">
	<label class="control-label required" for="ContactForm_body">
	</label>

	<div class="controls">
		<?php $this->widget('CCaptcha'); ?>
	</div>
</div>		
	
	
	
	
		
		
		<?php echo $form->textFieldRow($model,'verifyCode', array('hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.')); ?>
		


	<?php endif; ?>
	
</fieldset>
	
	<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Submit')); ?>
</div>

	

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
