<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<!--<p>Please fill out the following form with your login credentials:</p>-->

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
		'class'=>'well',
	),
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<fieldset>	
<?php echo $form->textFieldRow($model,'username', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model,'password', array('class'=>'span3')); ?>		
<?php echo $form->checkboxRow($model, 'rememberMe'); ?>
</fieldset>




<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
</div>

	

<?php $this->endWidget(); ?>
</div><!-- form -->



