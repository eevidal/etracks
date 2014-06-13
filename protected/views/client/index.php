<?php
$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
array('label'=>'Nuevo Cliente','url'=>array('create')),
array('label'=>'Buscar/Admnistar Cliente','url'=>array('admin')),
);
?>

<h1>Clientes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
