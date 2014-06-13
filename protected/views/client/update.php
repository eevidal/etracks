<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar Cliente','url'=>array('index')),
	array('label'=>'Nuevo Cliente','url'=>array('create')),
	array('label'=>'Detalles Cliente','url'=>array('view','id'=>$model->id)),
	array('label'=>'Buscar/administar Clientes','url'=>array('admin')),
	);
	?>

	<h1>Actualizar datos del Cliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>