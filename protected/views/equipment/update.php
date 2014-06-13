<?php
$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar Equipos','url'=>array('index')),
	array('label'=>'Nuevo Equipo','url'=>array('create')),
	array('label'=>'Ver Equipo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Buscar/administar Equipos','url'=>array('admin')),
	);
	?>

	<h1>Actualizar datos del Equipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>