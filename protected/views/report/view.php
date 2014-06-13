<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Report','url'=>array('index')),
//array('label'=>'Create Report','url'=>array('create')),
array('label'=>'Update Report','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Report','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Report','url'=>array('admin')),
);
?>

<h1>Informe nº<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'technician',
		'report',
		'observation',
		array('label'=>'Order', 'value'=>$model->order->id),
),
)); ?>
