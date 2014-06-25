<?php
$this->breadcrumbs=array(
	'Orders'=>array('index2'),
	'Manage',
);

$this->menu=array(
array('label'=>'Listar Ordenes','url'=>array('index')),
array('label'=>'Nuevo Ingreso','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('order-grid', {
data: $(this).serialize()
});
return false;
});
");
?>



<!--<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->
<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model_client,
      'attribute'=>'name',
      'name'=>'Client_name',
      'source'=>  $this->createUrl('ClientAutocomplete'),
      'htmlOptions'=>array('autocomplete'=>'off', 'placeholder'=>'Nombre'),
      'options'=>
         array(
               'showAnim'=>'fold',
               'select'=>'js:function(event, ui) 
                { $(".Client_name").val(ui.item["name"]); 
		  $("#Client_comercial_name").val(ui.item["comercial_name"]);
		  $("#Client_id").val(ui.item["id"]);  
		  }',
                 
                ),
      'cssFile'=>true,
   )); ?>


    	<input class="form-control" placeholder="Nombre comercial" disabled="true" name="Client[comercial_name]" id="Client_comercial_name" type="text">
    		<input class="form-control" placeholder="Número de Cliente" disabled="true" name="Client[id]" id="Client_id" type="text">
<h2>Buscar orden de trabajo</h2>
 <?php //echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,'model_client'=>$model_client,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'order-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		//'date',
		//'equipment_id',
		'client_id',
		
	//	'fail',
	//	'warranty',
		'date',	
	//	'status_id',
		//'adicional',
		
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
