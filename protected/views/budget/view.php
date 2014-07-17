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
);
?>

<h3>Resúmen del presupuesto</h3>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
// 		'id',
		'id_order',
// 		'id_report',
// 		'id_user',
		'date',
		'budget',
),
)); ?>
