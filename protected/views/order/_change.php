<div class="panel panel-default">
<?php

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'horizontal',
	// 'type' => 'inline',
//	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); 


$status= Status::model()->findAll();

foreach($status as $_status) 
	{	
		
		$return_array[] = array(
					'name'=>$_status->name,
					'id'=>$_status->id,
					);
			}
			
$data=$model;
?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?>
	<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->name); ?>
	<br />
<br>
<div class="panel panel-info">
<div class="panel-heading">
<h3>Nuevo estado</h3>

<?php echo $form->dropDownList($model,'status_id', CHtml::listData(Status::model()->findAll(), 'id', 'name')); ?>
<br/><br/>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',

			//'label'=>$model_cli->isNewRecord ? 'Create' : 'Save',
			//'label'=>$model_equi->isNewRecord ? 'Create' : 'Save',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?></div>
	</div>

<?php $this->endWidget(); ?>
</div>

<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">
	<i class='glyphicon glyphicon-exclamation-sign'></i>
	Atención al flujo de trabajo</h3>
  </div>
  <div class="panel-body">
  Nueva <i class='glyphicon glyphicon-arrow-right'></i> revisando <i class='glyphicon glyphicon-arrow-right'></i>
  presupuestar<i class='glyphicon glyphicon-arrow-right'></i> presupuestado <i class='glyphicon glyphicon-arrow-right'></i>
  autorizado <i class='glyphicon glyphicon-arrow-right'></i> listo<i class='glyphicon glyphicon-arrow-right'></i>entregado
  </div>
</div> 
</div>