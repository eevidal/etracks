<?php
$this->breadcrumbs=array(
	'Parts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
//	array('label'=>'List Part','url'=>array('index')),
	array('label'=>'Crear Parte','url'=>array('create')),
	array('label'=>'Ver Parte','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar Parte','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Parte <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>