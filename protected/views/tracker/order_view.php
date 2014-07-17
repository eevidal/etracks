<?php
$this->breadcrumbs=array(
	'Trackers'=>array('index'),
	//$model->id,
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
		
		if ($model->type==1)
		{
			$this->menu=array(
			array('label'=>'Cambiar Estado','url'=>array('order/change', 'id'=>$model_order->id)), //va a listo
			array('label'=>'Modificar Informe','url'=>array('update','id'=>$model->id)),
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




<h2>Orden Nº <?php echo $model_order->id; ?></h2>
<div class="view">
<?php 
$gar= array('Sí', 'No');
$this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model_order,
'type'=>'striped bordered condensed',
'attributes'=>array(
		//'id',
		'date',
		array('label'=>'Cliente', 'value'=>$model_order->client->name),
		array('label'=>'Equipo', 'value'=>$model_order->equipment->name),
		'observation',
		array('label'=>'Garantía', 'value'=>$gar[$model_order->warranty]),
		
),
)); ?>



<h3>Historia de Estados</h3>
 <?php $trackers=$model;

	//$return_array[]=array();
	foreach($trackers as $tracker) 
	{	
		
		$return_array[] = array(
			'date'=>$tracker->date,
			'technician'=>$tracker->technician,
			'status'=>$tracker->status->name,
			'time'=>$tracker->time,
					
					);
			}

if(!empty($return_array)) 
{
	echo "<table class='items table'><thead>";
	 echo "<tr>";
	echo "<th>Fecha</th>";
	echo "<th>Hora</th>";
	echo "<th>Estado</th>";
	echo "<th>Personal</th>";

	echo "</tr></thead>";
	foreach ($return_array as $p)
	{
	 echo "<tr>";
	 echo "<td>".$p['date']."</td>";
	 echo "<td>".$p['time']."</td>";
	 echo "<td>".$p['status']."</td>";
	 echo "<td>".$p['technician']."</td>";
// 	echo "<td class='button-column'>
// 	 <a class='update'  data-toggle='tooltip'
// 	 href='/etracks/index.php?r=reportPart/update&id=".$p['id']."'data-original-title='Update'>
// 	 <i class='glyphicon glyphicon-pencil'></i></a>
// 	 <a class='delete'  data-toggle='tooltip' href='/etracks/index.php?r=reportPart/delete&id=".$p['id']."' data-original-title='Delete'>
// 	 <i class='glyphicon glyphicon-trash'></i></a></td>";
// 	 echo "</tr>";
 	}
	echo "</table>";
}




?>
</div>   
   


