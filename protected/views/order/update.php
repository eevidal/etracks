<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
// 	array('label'=>'Listar Ordenes','url'=>array('index')),
// 	array('label'=>'Nuevo ingreso','url'=>array('create')),
	array('label'=>'Ver Orden','url'=>array('view','id'=>$model->id)),
// 	array('label'=>'Administrar/Buscar Orden','url'=>array('admin')),
// 	array('label'=>'Cambiar Estado','url'=>array('change', 'id'=>$model->id)),
);
?>

<?php 
	if(in_array( $model->status_id,array(2,3,9),true ))
	{
		echo "<h1>Actualizar datos de la Orden ".$model->id."</h1>";
		echo $this->renderPartial('_formupdate',array('model'=>$model));

	}
	else 
		echo $this->renderPartial('_error',array('model'=>$model, 'msg'=>'No es posible modificar
		manualmente los datos de la orden en el estado actual.'));

?>
