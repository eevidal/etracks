<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	'Create',
);

$this->menu=array(
// 	array('label'=>'Listar Ordenes de trabajo','url'=>array('index')),
// 	array('label'=>'Administrar/Buscar Ordenes','url'=>array('admin')),
);
?>

<h1>Nuevo Ingreso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_cli'=>$model_cli, 'model_equi'=>$model_equi)); ?>
