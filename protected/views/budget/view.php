<?php
$this->breadcrumbs=array(
	'Budgets'=>array('index'),
	$model->id,
);

$this->menu=array(
// array('label'=>'List Budget','url'=>array('index')),
// //array('label'=>'Create Budget','url'=>array('create')),
// array('label'=>'Update Budget','url'=>array('update','id'=>$model->id)),
// //array('label'=>'Delete Budget','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
 array('label'=>'Ver Orden','url'=>array('order/view','id'=>$model->id_order)),
 array('label'=>'Generar presupuesto pdf','url'=>array('budget/pdf','id'=>$model->id)),
);
?>

<h3>Resúmen del presupuesto</h3>


<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_order'=>$model_order,
'model_equipment'=>$model_equipment, 'model_part'=>$model_part, 'model_report'=>$model_report,
			'model_client'=>$model_client,
			'model_part_report'=>$model_part_report,
			'model_part'=>$model_part,
			 )); 


/*$this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
// 		'id',
		'id_order',
// 		'id_report',
// 		'id_user',
		'date',
		'budget',
),
)); */?>
