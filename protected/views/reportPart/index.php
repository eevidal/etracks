<?php
$this->breadcrumbs=array(
	'Report Parts',
);

$this->menu=array(
array('label'=>'Create ReportPart','url'=>array('create')),
array('label'=>'Manage ReportPart','url'=>array('admin')),
);
?>

<h1>Report Parts</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
