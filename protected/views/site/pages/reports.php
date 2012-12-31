<?php
$this->pageTitle=Yii::app()->name . ' - Reports';
$this->breadcrumbs=array(
	'Reports',
);
?>
<h1>Information Reporting</h1>

<!--<p>Please select from the list of reports below.</p>-->

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
				//array('label'=>'Family Report', 'url'=>array('report/rpt1')),
				//array('label'=>'District / Family Report', 'url'=>array('report/rpt2')),
				
			),
		)); ?>
		
		
		<?php 
		
		$content1 =  CHtml::link('Family Report',array('report/rpt1'));
		$content2 =  CHtml::link('District / Family Report',array('report/rpt2'));
		
		
		$this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs',
    'placement'=>'left', // 'above', 'right', 'below' or 'left'
    'tabs'=>array(
        array('label'=>'Family Reports', 'content'=>$content1, 'active'=>true),
        
       
        
        
        array('label'=>'People Reports', 'content'=>$content2 ),
        array('label'=>'Team Reports', 'content'=>'<p>What up girl, this is Section 3.</p>'),
    ),
)); ?>
</div>
