<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'horizontal',
	 'type' => 'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); 
/*
$criter = new CDbCriteria;
$criter->order = 'name ASC';

$status <- Status::model()->findAll($criter);*/
?>

	<p class="help-block">Los campos con <span class="required">*</span> son necesarios.</p>

	<?php echo $form->errorSummary($model,$model_cli,$model_equi); ?>

	
<div id=cliente>
<h3>Datos del cliente           
						
<br>
	 

	 <?php echo $form->hiddenField($model_cli,'id',array('class'=>'span5')); ?>
	   <?php echo $form->textFieldGroup($model_cli,'type',array('class'=>'span5')); ?></h3>
	 
	 

 	 <?php 
	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model_cli,
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
		  $("#Client_address1").val(ui.item["address1"]);
		  $("#Client_address2").val(ui.item["address2"]);
		  $("#Client_city").val(ui.item["city"]);
		  $("#Client_postal_code").val(ui.item["postal_code"]);
		  $("#Client_phone1").val(ui.item["phone1"]);
		  $("#Client_phone2").val(ui.item["phone2"]);
		  $("#Client_mail").val(ui.item["mail"]);
		  $("#Client_contacto").val(ui.item["constact"]);
		  $("#Client_comment").val(ui.item["comment"]);
		  $("#Client_id").val(ui.item["id"]);
		  $("#Client_type").val(ui.item["type"]);
	//	   $("#Order_client_id").val(ui.item["id"]);
		  
		  }',
                 
                ),
      'cssFile'=>true,
   )); ?>
   
<span class="required">*</span>

        <?php echo $form->textFieldGroup($model_cli,'comercial_name',array('class'=>'span8')); ?><span class="required">*</span>
        <?php echo $form->textFieldGroup($model_cli,'address1',array('class'=>'span5','maxlength'=>128)); ?>
        <?php echo $form->textFieldGroup($model_cli,'address2',array('class'=>'span5')); ?>
        <?php echo $form->textFieldGroup($model_cli,'city',array('class'=>'span5','maxlength'=>128)); ?>
        <?php echo $form->textFieldGroup($model_cli,'postal_code',array('class'=>'input-large')); ?>     
        <?php echo $form->textFieldGroup($model_cli,'phone1',array('class'=>'span5','maxlength'=>128)); ?>
        <?php echo $form->textFieldGroup($model_cli,'phone2',array('class'=>'span5','maxlength'=>128)); ?>
        <?php echo $form->textFieldGroup($model_cli,'mail',array('class'=>'span5','maxlength'=>128)); ?>
        <?php echo $form->textFieldGroup($model_cli,'contact',array('class'=>'span5')); ?>
	<br> <?php echo $form->textAreaGroup($model_cli,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
      
 
</div>	
<div>
<h3>Datos del Equipo <?php echo $form->hiddenField($model_equi,'id',array('class'=>'span5')); ?></h3>
	<?php //echo $form->textFieldGroup($model,'equipment_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldGroup($model,'client_id',array('class'=>'span5')); ?>

      

     
 <?php 
	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
	array(
		'model'=>$model_equi,
		'attribute'=>'serie',
		'name'=>'Equipment_serie',
		'source'=>  $this->createUrl('EquipmentAutocomplete'),
		'htmlOptions'=>array('autocomplete'=>'off', 'placeholder'=>'Nº de Serie'),
		'options'=>
		array(
			'showAnim'=>'fold',
			'select'=>'js:function(event, ui) 
				{ $(".Equipment_serie").val(ui.item["serie"]); 
				$("#Equipment_name").val(ui.item["name"]);
				$("#Equipment_id").val(ui.item["id"]);
				$("#Order_equipment_id").val(ui.item["serie"]);
				}',
                 
                ),
		'cssFile'=>true,
	)); ?>
   
<span class="required">*</span>
	<?php echo $form->textFieldGroup($model_equi,'name',array('class'=>'span5')); ?><span class="required">*</span><br>
	<?php echo $form->textAreaGroup($model,'fail',array('class'=>'span8')); ?><span class="required">*</span>
	<?php echo $form->checkBoxGroup($model,'warranty'); ?><br>	
	<?php echo $form->textAreaGroup($model,'adicional',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?><br>	
	<?php echo $form->textAreaGroup($model,'observation',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?> 
</div>	
<br>	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',

			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
