<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ordenes','url'=>array('index')),
	array('label'=>'Nuevos ingreso','url'=>array('create')),
	array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
	array('label'=>'Crear Informe','url'=>array('report/create','id'=>$model->id)),
//	array('label'=>'Delete Order','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Ordenes','url'=>array('admin')),
);
?>

<h1>Detalles orden de trabajo número <?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'date',
		array('label'=>'Equipo', 'value'=>$model->equipment->name),
		array('label'=>'Cliente', 'value'=>$model->client->name),
		'fail',
		'warranty',
		array('label'=>'Estado', 'value'=>$model->status->name),
		'adicional',
	),
)); ?>
