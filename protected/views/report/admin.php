<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listar Informes','url'=>array('index')),
//array('label'=>'Create Report','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('report-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>BUscar Informes</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'report-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'technician',
// 		'report',
// 		'observation',
		'order_id',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
