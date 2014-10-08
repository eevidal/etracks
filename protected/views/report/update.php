<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


switch ($model_order['status_id'])
{	
	case 9: //Revisando
	{
		$this->menu=array(
		array('label'=>'Agregar una parte','url'=>array('reportPart/create', 'report_id'=>$model->id)),
		array('label'=>'Agregar partes','url'=>array('reportPart/MultipleCreate', 'report_id'=>$model->id)),
		array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
		);
		break;
	}
	
	case 13: //Reparando
	{
		if ($model->type==1)
		{
			$this->menu=array(
			array('label'=>'Agregar una parte','url'=>array('reportPart/create', 'report_id'=>$model->id)),
			array('label'=>'Agregar partes','url'=>array('reportPart/MultipleCreate', 'report_id'=>$model->id)),
			array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
			array( 'label'=> 'Ver presupuesto','url'=>array( 'budget/view' ,'id'=>$model_order->id)) , 
			);
		} 
		else
		{
			$this->menu=array(
			array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model_order->id)),
			array( 'label'=> 'Ver presupuesto','url'=>array( 'budget/view' ,'id'=>$model_order->id)) , 
			);
		} 
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



	
<?php 	
	if(in_array( $model_order->status_id,array(9,13),true ))
	{
		$typ= array('presupuesto', 'trabajo');
		echo "<h1>Actualizar Informe de".$typ[$model->type]." </h1>";
		echo $this->renderPartial('_formupdate', array('model'=>$model, 
							'model_order'=>$model_order,
							'model_cli'=>$model_cli, 
							'model_equi'=>$model_equi,
							'model_part'=>$model_part,
							'model_part_report'=>$model_part_report,)); 
	}
	else {
	echo $this->render('error',array('id'=>$model_order->id, 'msg'=>'No es posible modificar
		los datos del informe en el estado actual de la orden.'));
		break;}
?>