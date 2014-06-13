<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar Informes','url'=>array('index')),
	//array('label'=>'Create Report','url'=>array('create')),
	array('label'=>'View Report','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Report','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Informe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formupdate', array('model'=>$model, 
						'model_order'=>$model_order,
						'model_cli'=>$model_cli, 
						'model_equi'=>$model_equi,
						'model_part'=>$model_part,
						'model_part_report'=>$model_part_report,)); ?>