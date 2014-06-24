<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);


if($model['status_id'] !=2)
{
	$this->menu=array(
	array('label'=>'Listar ordenes','url'=>array('index')),
	array('label'=>'Nuevos ingreso','url'=>array('create')),
	array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
	array('label'=>'Ver Informe','url'=>array('report/OrderView','id'=>$model->id)),
	array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
//	array('label'=>'Delete Order','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Ordenes','url'=>array('admin')),
);
}
else {
	$this->menu=array(
	array('label'=>'Listar ordenes','url'=>array('index')),
	array('label'=>'Nuevos ingreso','url'=>array('create')),
	array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
	array('label'=>'Crear Informe','url'=>array('report/create','id'=>$model->id)),
	array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
//	array('label'=>'Delete Order','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Ordenes','url'=>array('admin')),
	);
}
?>

<h1>Detalles orden de trabajo número <?php echo $model->id; ?></h1>

<?php 

$gar= array('Sí', 'No');
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'date',
		array('label'=>'Equipo', 'value'=>$model->equipment->name),
		array('label'=>'Cliente', 'value'=>$model->client->name),
		'fail',
		array('label'=>'Garantía', 'value'=>$gar[$model->warranty]),
		array('label'=>'Estado', 'value'=>$model->status->name),
		'adicional',
	),
)); ?>
