<?php
$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Equipos','url'=>array('index')),
array('label'=>'Buscar/administar Equipos','url'=>array('admin')),
);
?>

<h1>Nuevo Equipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>