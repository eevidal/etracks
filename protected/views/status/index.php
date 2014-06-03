<?php
$this->breadcrumbs=array(
	'Statuses',
);

$this->menu=array(
array('label'=>'Create Status','url'=>array('create')),
array('label'=>'Manage Status','url'=>array('admin')),
);
?>

<h1>Statuses</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
