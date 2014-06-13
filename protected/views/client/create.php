<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Cliente','url'=>array('index')),
array('label'=>'Buscar/Administar Cliente','url'=>array('admin')),
);
?>

<h1>Nuevo Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>