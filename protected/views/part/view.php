<?php
$this->breadcrumbs=array(
	'Parts'=>array('index'),
	$model->name,
);

$this->menu=array(
//array('label'=>'List Part','url'=>array('index')),
array('label'=>'Crear Parte','url'=>array('create')),
array('label'=>'Actualizar Parte','url'=>array('update','id'=>$model->id)),
array('label'=>'Borrar Parte','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que quiere borrar este registro?')),
array('label'=>'Administrar Parte','url'=>array('admin')),
);
?>

<h1>Detalles de la parte con registro #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'description',
		'stock',
),
)); ?>
