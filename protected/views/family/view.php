


<?php
$this->breadcrumbs=array(
	'Familys'=>array('index'),
	$model->id,
);

?>




<?php
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
        array('label'=>'Update Family', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Create Family Member', 'url'=>array('People/create','fid'=>$model->id)),
        //array('label'=>'another button', 'url'=>'#'),
    ),
    'htmlOptions'=>array('style'=>'float: right;'),
    'type'=>'success',
    'size'=>'small',    
));

?>

<h2>Details for the <?php echo CHtml::encode($model->family_name); ?> Family</h2>

<div class="span-6"><p><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>		
</div>				
		
<div class="span-10 last">		
<p><strong>Contact Telephone Number:</strong> 028 7130 1674</br>
				<strong>District:</strong> Drumahoe(8) </br>
				<strong>District Leader:</strong> Mr Joe Blogs</p>			
</div>






<table>
<tr><td>Family ID: 56</td><td>Contact Tel Number:</td><td>028 7130 1674</td></tr>
<tr><td>
	<ul>
		<li>Our House name</li>
		<li>7 Redwood Park</li>
		<li>Drumahoe</li>
		<li>Londonderry</li>
		<li>Northern Ireland</li>
		<li>United Kingdom</li>
		<li>BT47 3NU</li>
	</ul>
</td><td>District:</td><td>Drumahoe (8)</td></tr>
</table>


<table>
	<tr>
		<td>
			<p class="well"><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>		
		</td>
		<td>
			<p class="well"><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>
		</td>
		<td>
			<p class="well"><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>
		</td>
		
	</tr>
</table>


			
<p class="well">
    Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
    consectetur adipiscing elit.
    Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
    Pellentesque at tellus urna.
    Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
    ligula urna consequat tortor, at vehicula tellus est a orci.
    Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
    Sed odio dui, pretium eu pellentesque ac,
    <a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.
</p>


<p class="well"><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>
				
<p class="well"><strong>Address:</strong></br>
				House Name</br>
				7 Redwood Park</br>
				Drumahoe</br>
				Londonderry</br>
				Northern Ireland</br>
				United Kingdom</br>
				BT47 3NU</p>


















<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'family_name',
		'house_name',
		'house_number',
		'address_line1',
		'address_line2',
		'city',
		'region',
		'postcode',
		'country',
		'telephone',
		'district.district_name',	//previously 'district_id'
		'district.district_leaders_id',
		'district.district_leaders_id.name',
		//'create_time',
		//'create_user_id',
		//'update_time',
		//'update_user_id',
	),
)); ?>
<br>
<h1>List of Family Members</h1>

<?php $this->widget('zii.widgets.CListView', array
		(
			'dataProvider'=>$peopleDataProvider,
			'itemView'=>'/people/_view',
		)
		);



?>



