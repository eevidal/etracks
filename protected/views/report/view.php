<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'Listar Informes','url'=>array('index')),
//array('label'=>'Create Report','url'=>array('create')),
array('label'=>'Modificar Informe','url'=>array('update','id'=>$model->id)),
	array('label'=>'Crear Presupuesto','url'=>array('budget/create','id'=>$model->id)),
// array('label'=>'Delete Report','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar Informes','url'=>array('admin')),
);


switch ($model_order['status_id'])
{	
	case 9: //Revisando
	{
		$this->menu=array(
		array('label'=>'Cambiar Estado','url'=>array('order/change', 'id'=>$model_order->id)), //directamente poner en presupuestar
		array('label'=>'Modificar Informe','url'=>array('update','id'=>$model->id)),
		array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
		);
		break;
	}
	
	case 13: //Reparando
	{
		$this->menu=array(
		array('label'=>'Cambiar Estado','url'=>array('order/change', 'id'=>$model_order->id)), //va a listo
		array('label'=>'Modificar Informe','url'=>array('update','id'=>$model->id)),
		array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
		);
		break;
	}
	
	
	default:
	{
		$this->menu=array(
		array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
		);
	}
	
	

}
?>




<?php $typ= array('presupuesto', 'trabajo');?>
<h1>Resúmen del Informe de <?php  echo $typ[$model->type]; ?> </h1>


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
