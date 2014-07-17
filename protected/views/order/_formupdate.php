<?php 
echo "<div class=\"view\">";
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'horizontal',
	// 'type' => 'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); 
echo $form->errorSummary($model);

	$gar= array('Sí', 'No');
$this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
		'date',
		array('label'=>'Equipo', 'value'=>$model->equipment->name),
		array('label'=>'Cliente', 'value'=>$model->client->name),
		'fail',
		array('label'=>'Garantía', 'value'=>$gar[$model->warranty]),
		array('label'=>'Estado', 'value'=>$model->status->name),
		'adicional',
		'observation',
	),
)); ?>

</div>



<h4>Sólo es posible actualizar la siguiente información</h4>
<div class="view">
  <?php echo $form->checkBoxGroup($model,'warranty'); ?>
  <?php echo $form->textAreaGroup($model,'observation',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?> 
<br>	
	

</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',

			//'label'=>$model_cli->isNewRecord ? 'Create' : 'Save',
			//'label'=>$model_equi->isNewRecord ? 'Create' : 'Save',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
