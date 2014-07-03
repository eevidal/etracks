<?php
$this->breadcrumbs=array(
	'Trackers',
);

$this->menu=array(
array('label'=>'Create Tracker','url'=>array('create')),
array('label'=>'Manage Tracker','url'=>array('admin')),
);
?>

<h1>Trackers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
