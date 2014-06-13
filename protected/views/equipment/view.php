<?php
$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'Listar Equipo','url'=>array('index')),
array('label'=>'Crear Equipo','url'=>array('create')),
array('label'=>'Actualizar Equipo','url'=>array('update','id'=>$model->id)),

//array('label'=>'Delete Equipment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Buscar/administar Equipos','url'=>array('admin')),
);
?>

<h1>Detalles del Equipo #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'serie',
),
)); ?>
