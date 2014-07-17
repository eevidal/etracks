<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	
	$model->id,
);

// 		$criteria=new CDbCriteria;
// 
// 		$criteria->condition ="order_id = '$model->id'";
// 		$model_report=Report::model()->findAll($criteria);

//if($model['status_id'] !=2)
switch ($model['status_id'])
{	case 2:
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		array('label'=>'Crear Informe de presupuesto','url'=>array('report/create','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),
		
		);
		break;
	}
	
	case 3:
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=>   'Crear presupuesto' ,'url'=>array( 'budget/create' ,'id'=>$model_report[0]->id)) , 
//	array('label'=>'Delete Order','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	case 4: //presupuestado
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=>   'Ver presupuesto' ,	'url'=>array( 'budget/view' ,'id'=>$model->id)) , 
		array( 'label'=>   'Aceptar/Rechazar ' , 'url'=>array( 'order/change' ,'id'=>$model->id)) ,
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	case 6:
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		array('label'=>'Devolver','url'=>array('change', 'id'=>$model->id)),
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=>   'Ver presupuesto' ,	'url'=>array( 'budget/view' ,'id'=>$model->id)) , 
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	case 7:
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
 		array('label'=>'Entregar','url'=>array('change', 'id'=>$model->id)),
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=> 'Ver presupuesto' ,	'url'=>array( 'budget/view' ,'id'=>$model->id)) , 
		array('label'=>'Ver Informe de trabajo','url'=>array('report/TOrderView','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),	
		);
		break;
	}
	
	case 8: //Entregado
	{
		$this->menu=array(
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=>'Ver presupuesto' ,	'url'=>array( 'budget/view' ,'id'=>$model->id)) , 
		array('label'=>'Ver Informe de trabajo','url'=>array('report/TOrderView','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	case 9: //Revisando
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),		
		array('label'=>'Cambiar Estado','url'=>array('change', 'id'=>$model->id)), //directamente poner en presupuestar
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	case 12: //Devuelto
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		
		array('label'=>'Cambiar Estado','url'=>array('change', 'id'=>$model->id)), //directamente poner en presupuestar
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	case 13: //Reparando
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),		
		array('label'=>'Cambiar Estado','url'=>array('change', 'id'=>$model->id)), 
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Ver Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array('label'=>'Ver Informe de trabajo','url'=>array('report/TOrderView','id'=>$model->id)),
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
		break;
	}
	
	
	// 5-10-11 //Autorizado/con mod/esperando rep
	default:
	{
		$this->menu=array(
		array('label'=>'Actualizar Orden','url'=>array('update','id'=>$model->id)),
		array('label'=>'Crear Informe de trabajo','url'=>array('report/create','id'=>$model->id)),
		array('label'=>'Imprimir Orden','url'=>array('pdf','id'=>$model->id)),
		array('label'=>'Informe de presupuesto','url'=>array('report/OrderView','id'=>$model->id)),
		array( 'label'=> 'Ver presupuesto','url'=>array( 'budget/view' ,'id'=>$model->id)) , 
		array('label'=>'-----------------------'),
		array('label'=>'Registro de actividad','url'=>array('tracker/OrderView','id'=>$model->id)),		
		);
	}
	
	

}
?>

<h1>Detalles orden de trabajo número <?php echo $model->id; ?></h1>

<?php 
if (in_array($model->status_id,array(8,12),true )) {
	$criteria=new CDbCriteria;
	$criteria->condition ="status_id = '$model->status_id' AND order_id ='$model->id' ";
	$tracker = Tracker::model()->findAll($criteria);
	//var_dump($tracker);
}
$gar= array('Sí', 'No');
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'date',
		array('label'=>'Fecha de egreso', 'value'=> (!empty($tracker)) ? $tracker[0]->date : ''),
		array('label'=>'Equipo', 'value'=>$model->equipment->name),
		array('label'=>'Cliente', 'value'=>$model->client->name),
		'fail',
		array('label'=>'Garantía', 'value'=>$gar[$model->warranty]),
		array('label'=>'Estado', 'value'=>$model->status->name),
		
		'adicional',
		'observation',
	),
)); ?>
