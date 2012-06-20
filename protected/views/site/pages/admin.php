<?php
$this->pageTitle=Yii::app()->name . ' - Admin';
$this->breadcrumbs=array(
	'Admin',
);
?>
<h1>Administration Section</h1>

<p>Please select from the list below to manage the various options available within the package.</p>

<div>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				
				array('label'=>'Districts', 'url'=>array('district/index')),
				array('label'=>'DistrictLeaders', 'url'=>array('districtLeader/index')),
				//array('label'=>'Families', 'url'=>array('family/index')),
				array('label'=>'Marital Status Options', 'url'=>array('maritalStatus/index')),
				array('label'=>'Membership Status Options', 'url'=>array('membershipStatus/index')),
				array('label'=>'Next Church Options', 'url'=>array('nextChurch/index')),
				//array('label'=>'People', 'url'=>array('people/index')),
				array('label'=>'Previous Church Options', 'url'=>array('previousChurch/index')),
				array('label'=>'Salutation Options', 'url'=>array('salutation/index')),
				array('label'=>'Suffix Options', 'url'=>array('suffix/index')),
				//array('label'=>'Team Options', 'url'=>array('team/index')),
				//array('label'=>'User Management', 'url'=>array('user/index')),
				
				
			),
		)); ?>
</div>
