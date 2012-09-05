<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<!--<div id="adminmenu">



		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Users', 'url'=>array('user/index'), 'visible'=>!Yii::app()->user->isGuest),
				
				array('label'=>'Admin', 'url'=>array('/site/page', 'view'=>'admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>

	</div>-->




<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    //'fixed'=>false,
    'brand'=>'ChurchDB',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                //array('label'=>'Home', 'url'=>array('/family/index'), 'active'=>true),
                array('label'=>'Users', 'url'=>array('user/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Admin', 'url'=>array('/site/page', 'view'=>'admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                
                
                
                
                
                
                array('label'=>'Drop', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'NAV HEADER'),
                    array('label'=>'Separated link', 'url'=>'#'),
                    array('label'=>'One more separated link', 'url'=>'#'),
                )),
            ),
        ),
        /*'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Link', 'url'=>'#'),
                '---',
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
            ),
        ),*/
    ),
)); ?>





























	<!--<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<?php if(isset($this->breadcrumbs)):?>


		<!--<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->

		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    		'links'=>$this->breadcrumbs,
			'htmlOptions'=>array('style'=>'font-size: 0.75em;'),
		)); ?>




	<?php endif?>



<div id="bsmainmenu">
<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        //array('label'=>'Home', 'url'=>'#', 'active'=>true),
		array('label'=>'Families', 'url'=>array('family/index'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'People', 'url'=>array('people/index'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Teams', 'url'=>array('team/index'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Reports', 'url'=>array('site/page', 'view'=>'reports'), 'visible'=>!Yii::app()->user->isGuest),
        //array('label'=>'Profile', 'url'=>'#'),
        //array('label'=>'Messages', 'url'=>'#'),
    ),
)); ?>

	</div>






	<!--<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				
				
				//array('label'=>'Districts', 'url'=>array('district/index')),
				//array('label'=>'DistrictLeaders', 'url'=>array('districtLeader/index')),
				array('label'=>'Families', 'url'=>array('family/index'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'mar', 'url'=>array('maritalStatus/index')),
				//array('label'=>'mem', 'url'=>array('membershipStatus/index')),
				//array('label'=>'nxt', 'url'=>array('nextChurch/index')),
				array('label'=>'People', 'url'=>array('people/index'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'pre', 'url'=>array('previousChurch/index')),
				//array('label'=>'sal', 'url'=>array('salutation/index')),
				//array('label'=>'sfx', 'url'=>array('suffix/index')),
				array('label'=>'Teams', 'url'=>array('team/index'), 'visible'=>!Yii::app()->user->isGuest),
				
				array('label'=>'Reports', 'url'=>array('site/page', 'view'=>'reports'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		)); ?>
	</div><!-- mainmenu -->





	<?php echo $content; ?>










	

<div id="footer1">
<div class="navbar navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a><a href="#" class="brand">ChurchDB</a>

      <div class="nav-collapse">
		<p><br /><br /><br />Copyright &copy; 2012 by Church Database Management.<br />
All Rights Reserved.<br />
Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.</p>

      </div>
    </div>
  </div>
</div>
</div>



</div><!-- page -->

</body>
</html>
