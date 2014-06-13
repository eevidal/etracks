<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Ordenes','url'=>array('index')),
	array('label'=>'Nuevo ingreso','url'=>array('create')),
	array('label'=>'Vier Orden','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar/Buscar Orden','url'=>array('admin')),
);
?>

<h1>Actualizar datos de la Orden <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formupdate',array('model'=>$model)); ?>