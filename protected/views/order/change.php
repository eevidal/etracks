<?php 
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Change',
);

$this->menu=array(
// 	array('label'=>'Listar Ordenes','url'=>array('index')),
// 	array('label'=>'Nuevo ingreso','url'=>array('create')),
 	array('label'=>'Ver Orden','url'=>array('view','id'=>$model->id)),
// 	array('label'=>'Administrar/Buscar Orden','url'=>array('admin')),
// 	array('label'=>'Cambiar Estado','url'=>array('change', 'id'=>$model->id)),
);
?>

<?php echo $this->renderPartial('_change',array('model'=>$model, 'model_status'=>$model_status, 'model_tracker'=>$model_tracker)); ?>
