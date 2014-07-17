<?php
$this->breadcrumbs=array(
	'Budgets'=>array('index'),
	'Create',
);

$this->menu=array(
// array('label'=>'List Budget','url'=>array('index')),
// array('label'=>'Manage Budget','url'=>array('admin')),
);
?>

<div class='view'>
<h2>Presupuesto para la orden Nº <?php echo $model_order->id;?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_order'=>$model_order,
'model_equipment'=>$model_equipment, 'model_part'=>$model_part, 'model_report'=>$model_report,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
			 )); ?>