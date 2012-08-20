<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'well'),
)); ?>



<div class="row">
	<div class="span2"><?php echo $form->label($model,'family_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'family_name',array('size'=>60,'maxlength'=>100)); ?></div>
	<div class="span2"><?php echo $form->label($model,'house_name'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'house_name',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2"><?php echo $form->label($model,'telephone'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'telephone',array('size'=>25,'maxlength'=>25)); ?></div>
	<div class="span2"><?php echo $form->label($model,'house_number'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'house_number',array('size'=>10,'maxlength'=>10)); ?></div>
</div>

<div class="row">
	<div class="span2"><?php echo $form->label($model,'district_id'); ?></div>
	<div class="span3"><?php echo $form->dropDownList($model,'district_id', CHtml::listData(District::model()->findAll(), 'id', 'district_name'), array('prompt'=>'(Select a District)')); ?></div>
	<div class="span2"><?php echo $form->label($model,'address_line1'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'address_line1',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->label($model,'address_line2'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'address_line2',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->label($model,'city'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->label($model,'region'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>100)); ?></div>
</div>

<div class="row">
	<div class="span2 offset5"><?php echo $form->label($model,'postcode'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'postcode',array('size'=>20,'maxlength'=>20)); ?></div>
</div>

<div class="row">

	<div class="span3 offset2">
			<?php //echo CHtml::submitButton('Search'); ?>
			<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'search', 'label'=>'Search')); ?>
	</div>
	<div class="span2"><?php echo $form->label($model,'country'); ?></div>
	<div class="span3"><?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?></div>
</div>











<!--

<div>
	<table>
		<tr>
			<td><?php echo $form->label($model,'family_name'); ?></td>
			<td><?php echo $form->textField($model,'family_name',array('size'=>60,'maxlength'=>100)); ?></td>
			<td><?php echo $form->label($model,'house_name'); ?></td>
			<td><?php echo $form->textField($model,'house_name',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->label($model,'telephone'); ?></td>
			<td><?php echo $form->textField($model,'telephone',array('size'=>25,'maxlength'=>25)); ?></td>
			<td><?php echo $form->label($model,'house_number'); ?></td>
			<td><?php echo $form->textField($model,'house_number',array('size'=>10,'maxlength'=>10)); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->label($model,'district_id'); ?></td>
			<td><?php echo $form->dropDownList($model,'district_id', CHtml::listData(District::model()->findAll(), 'id', 'district_name'), array('prompt'=>'(Select a District)')); ?></td>
			<td><?php echo $form->label($model,'address_line1'); ?></td>
			<td><?php echo $form->textField($model,'address_line1',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $form->label($model,'address_line2'); ?></td>
			<td><?php echo $form->textField($model,'address_line2',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $form->label($model,'city'); ?></td>
			<td><?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $form->label($model,'region'); ?></td>
			<td><?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><?php echo $form->label($model,'postcode'); ?></td>
			<td><?php echo $form->textField($model,'postcode',array('size'=>20,'maxlength'=>20)); ?></td>
		</tr>
		<tr>
			<td></td>
			<td>
				
					<?php //echo CHtml::submitButton('Search'); ?>
					<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'search', 'label'=>'Search')); ?>
				
			</td>
			<td><?php echo $form->label($model,'country'); ?></td>
			<td><?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?></td>
		</tr>
		
	</table>
</div>




-->









	

<?php $this->endWidget(); ?>

</div><!-- search-form -->
