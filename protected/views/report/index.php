<?php
$this->breadcrumbs=array(
	'Reports',
);

// $this->menu=array(
// array('label'=>'Create Report','url'=>array('create')),
// array('label'=>'Manage Report','url'=>array('admin')),
// );
?>

<h1>Informes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
