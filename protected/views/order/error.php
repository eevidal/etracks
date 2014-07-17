<?php
$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'Nuevo Ingreso','url'=>array('create')),
	array('label'=>'Administrar Ordenes','url'=>array('admin')),
);
?>

<h1>Ordenes de trabajo</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
