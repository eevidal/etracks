<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Informes','url'=>array('index')),
array('label'=>'Manage Report','url'=>array('admin')),
);
?>



<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_order'=>$model_order,'model_cli'=>$model_cli, 'model_equi'=>$model_equi)); ?>