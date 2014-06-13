<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listar Cliente','url'=>array('index')),
array('label'=>'Nuevo Cliente','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('client-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Buscar Clientes</h1>



<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'client-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
//		'id',
		'name',
		'comercial_name',
	//	'address1',
	//	'phone1',
	//	'phone2',
		
		//'mail',
//		'comment',
	//	'city',
	//	'contact',
	//	'type',
	//	'postal_code',
	//	'address2',
		
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
