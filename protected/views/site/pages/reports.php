<?php
$this->pageTitle=Yii::app()->name . ' - Reports';
$this->breadcrumbs=array(
	'Reports',
);
?>
<h1>Information Reporting</h1>

<p>Please select from the list of reports below.</p>

<div>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
			
			
				
				/*
				array('label'=>'Districts', 'url'=>array('district/index')),
				array('label'=>'DistrictLeaders', 'url'=>array('districtLeader/index')),
				array('label'=>'Families', 'url'=>array('family/index')),
				array('label'=>'Marital Status Options', 'url'=>array('maritalStatus/index')),
				array('label'=>'Membership Status Options', 'url'=>array('membershipStatus/index')),
				array('label'=>'Next Church Options', 'url'=>array('nextChurch/index')),
				//array('label'=>'People', 'url'=>array('people/index')),
				array('label'=>'Previous Church Options', 'url'=>array('previousChurch/index')),
				array('label'=>'Salutation Options', 'url'=>array('salutation/index')),
				array('label'=>'Suffix Options', 'url'=>array('suffix/index')),
				//array('label'=>'Team Options', 'url'=>array('team/index')),
				//array('label'=>'User Management', 'url'=>array('user/index')),
				*/
				array('label'=>'Family Report', 'url'=>array('report/rpt1')),
				array('label'=>'District / Family Report', 'url'=>array('report/rpt2')),
				
			),
		)); ?>
</div>
