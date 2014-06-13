<?php
$this->breadcrumbs=array(
	'Equipments',
);

$this->menu=array(
array('label'=>'Crear Equipos','url'=>array('create')),
array('label'=>'Buscar/administar Equipos','url'=>array('admin')),
);
?>

<h1>Equipos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
