<?php
$this->breadcrumbs=array(
	'Report Parts'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ReportPart','url'=>array('index')),
array('label'=>'Create ReportPart','url'=>array('create')),
array('label'=>'Update ReportPart','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ReportPart','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ReportPart','url'=>array('admin')),
);
?>

<h1>View ReportPart #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'part_id',
		'report_id',
		'quantity',
		'id',
),
)); ?>
