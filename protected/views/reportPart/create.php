<?php
$this->breadcrumbs=array(
	'Report Parts'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ReportPart','url'=>array('index')),
array('label'=>'Manage ReportPart','url'=>array('admin')),
);
?>

<h1>Create ReportPart</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>