<?php
$this->breadcrumbs=array(
	'Budgets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Budget','url'=>array('index')),
	array('label'=>'Create Budget','url'=>array('create')),
	array('label'=>'View Budget','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Budget','url'=>array('admin')),
	);
	?>

	<h1>Update Budget <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_order'=>$model_order,
'model_equipment'=>$model_equipment, 'model_part'=>$model_part, 'model_report'=>$model_report,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
			 )); 
?>