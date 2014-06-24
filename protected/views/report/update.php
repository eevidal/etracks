<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'Listar Informes','url'=>array('index')),
	array('label'=>'Agregar partes','url'=>array('reportPart/create', 'report_id'=>$model->id)),
	array('label'=>'Ver Informe','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administrar/buscar Informe','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Informe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_formupdate', array('model'=>$model, 
						'model_order'=>$model_order,
						'model_cli'=>$model_cli, 
						'model_equi'=>$model_equi,
						'model_part'=>$model_part,
						'model_part_report'=>$model_part_report,)); ?>