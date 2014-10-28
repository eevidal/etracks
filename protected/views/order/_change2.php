<div class="view">
<?php

$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
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

	<b><?php 
	$gar= array('No', 'Sí');
	echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($gar[$data->warranty]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->name); ?>
	<br />
<br>

</div>	
<div class="view">
<?php //echo $form->textFieldGroup($model_tracker,'technician',array('class'=>'span8')); ?>
	
<?php



switch ($model['status_id'])
{	
	case 2:
	 {
		$this->redirect(array('error','id'=>$model->id,'msg'=>'No es posible alterar manualmente el estado actual de la orden.'));
		break;
	 }
	 
	case 3:	
	{
		echo "<h4><div class=\"panel panel-info\">  <div class=\"panel-heading\">Elegir nuevo estado: </b>";
		echo $form->hiddenField($model,'status_id',array('class'=>'span5')); 
		echo $form->dropDownList($model,'status_id',array('9'=>'Revisando')); 
		echo "</div></div>";
		break;
	 }

	
	case 7:	
	{
		echo "<h4><div class=\"panel panel-info\">  <div class=\"panel-heading\">Elegir nuevo estado: </b>";
		echo $form->hiddenField($model,'status_id',array('class'=>'span5')); 
		echo $form->dropDownList($model,'status_id',array('13'=>'Reparando')); 
		echo "</div></div>";
		break;
	 }
	


	 
 	default:
	 {
		
		$this->redirect(array('error','id'=>$model->id,'msg'=>'No es posible alterar manualmente el estado actual de la orden.'));
	 
	 }
	 
	 
};
	 ?> 


<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',

			//'label'=>$model_cli->isNewRecord ? 'Create' : 'Save',
			//'label'=>$model_equi->isNewRecord ? 'Create' : 'Save',
			'label'=>$model->isNewRecord ? 'Crear' : 'Aceptar',
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
  {autorizado/ con cambios/ esperando repuestos} <i class='glyphicon glyphicon-arrow-right'></i> reparando
  <i class='glyphicon glyphicon-arrow-right'></i>  listo<i class='glyphicon glyphicon-arrow-right'></i>entregado
  </div>
    <div class="panel-body">
  Nueva <i class='glyphicon glyphicon-arrow-right'></i> revisando <i class='glyphicon glyphicon-arrow-right'></i>
  presupuestar<i class='glyphicon glyphicon-arrow-right'></i> presupuestado <i class='glyphicon glyphicon-arrow-right'></i>
  NO autorizado <i class='glyphicon glyphicon-arrow-right'></i> devuleto.
  </div>

