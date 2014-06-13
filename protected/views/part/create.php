<?php
$this->breadcrumbs=array(
	'Parts'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Part','url'=>array('index')),
array('label'=>'Administrar Partes','url'=>array('admin')),
);
?>

<h1>Crear Parte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>