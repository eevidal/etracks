<?php
$this->breadcrumbs=array(
	'Report Parts'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List ReportPart','url'=>array('index')),
array('label'=>'Create ReportPart','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('report-part-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Report Parts</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'report-part-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'part_id',
		'report_id',
		'quantity',
		'id',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
