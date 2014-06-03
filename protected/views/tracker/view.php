<?php
$this->breadcrumbs=array(
	'Trackers'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Tracker','url'=>array('index')),
array('label'=>'Create Tracker','url'=>array('create')),
array('label'=>'Update Tracker','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Tracker','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Tracker','url'=>array('admin')),
);
?>

<h1>View Tracker #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'date',
		'user_id',
		'staus',
		'order_id',
),
)); ?>
