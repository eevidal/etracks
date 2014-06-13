<?php
$this->breadcrumbs=array(
	'Report Parts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ReportPart','url'=>array('index')),
	array('label'=>'Create ReportPart','url'=>array('create')),
	array('label'=>'View ReportPart','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ReportPart','url'=>array('admin')),
	);
	?>

	<h1>Update ReportPart <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>