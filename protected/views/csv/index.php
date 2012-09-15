<?php
/* @var $this CsvController */

$this->breadcrumbs=array(
	'Csv',
);
?>

<!--
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>-->

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>
 
<fieldset>
 
    <legend>Legend</legend>
 
    <?php echo $form->textFieldRow($model, 'textField', array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
    <?php echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
    <?php echo $form->dropDownListRow($model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?>
    <?php echo $form->fileFieldRow($model, 'fileField'); ?>
    <?php echo $form->textAreaRow($model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
    <?php echo $form->uneditableRow($model, 'uneditable'); ?>
    <?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?>
    <?php echo $form->textFieldRow($model, 'prepend', array('prepend'=>'@')); ?>
    <?php echo $form->textFieldRow($model, 'append', array('append'=>'.00')); ?>
    <?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled'=>true)); ?>
    <?php echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
    <?php echo $form->checkBoxListRow($model, 'checkboxes', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can also be checked and included in form results',
        'Option three can—yes, you guessed it—also be checked and included in form results',
    ), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
    <?php echo $form->radioButtonRow($model, 'radioButton'); ?>
    <?php echo $form->radioButtonListRow($model, 'radioButtons', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?>
 
</fieldset>
 
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
 
<?php $this->endWidget(); ?>
