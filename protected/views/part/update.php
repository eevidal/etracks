<?php
$this->breadcrumbs=array(
	'Parts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Part','url'=>array('index')),
	array('label'=>'Create Part','url'=>array('create')),
	array('label'=>'View Part','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Part','url'=>array('admin')),
	);
	?>

	<h1>Update Part <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>