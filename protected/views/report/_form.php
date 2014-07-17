<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-form',
	 'type' => 'inline',
	'enableAjaxValidation'=>false,
)); ?>
 	
<h2 >Informe técnico <?php //echo $form->textFieldGroup($model,'technician',array('class'=>'span5')); ?></h2>




     
<div class="view">
<?php $data=$model_equi; ?>


	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>

<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('serie')); ?>:</b>
	<?php echo CHtml::encode($data->serie); ?>
	<br/>



<?php $data=$model_order; ?>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('order/view','id'=>$data->id)); ?>

<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->name); ?>
	<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>



</div>
<div class="view">
<h4 >Informe </h4>
<?php echo $form->errorSummary($model); ?>

	

	<?php echo $form->textAreaGroup($model,'report',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	
	<?php echo $form->textFieldGroup($model,'observation',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldGroup($model,'order_id',array('class'=>'span5')); ?>

 <h5>Partes</h5>
 <?php  
   $this->widget(
    'booster.widgets.TbSelect2',
    array(
       'model'=>$model_part,
        'name' => 'Part',
        'data' => CHtml::listData(Part::model()->findAll(), 'id', 'name'),
        'htmlOptions' => array(
            'multiple' => 'multiple',
            
        ),
    )
);
/*		
	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model_part,
      'attribute'=>'name',
      'name'=>'Part_name',
      'source'=>  $this->createUrl('PartAutocomplete'),
      'htmlOptions'=>array('autocomplete'=>'off', 'placeholder'=>'Nº de parte'),
      'options'=>
         array(
               'showAnim'=>'fold',
               'select'=>'js:function(event, ui) 
                { $(".Part_name").val(ui.item["name"]); 
		   $("#Part_name").val(ui.item["name"]);
		    $("#Part_id").val(ui.item["id"]);
		     $("#Part_stock").val(ui.item["stock"]);
                 }',
                 
                ),
      'cssFile'=>true,
   )); ?>*/


?>
	
	<!--<?php echo $form->textFieldGroup($model_part,'description[]',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
 
	<?php echo $form->textFieldGroup($model_part,'stock[]',array('class'=>'span5')); ?>
<br>-->
 
<br>
</div>

<div class="view">
<h4 class="report">Datos del cliente           </h4>
<?php $data=$model_cli; ?>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?><br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('client/view','id'=>$data->id)); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('comercial_name')); ?>:</b>
	<?php echo CHtml::encode($data->comercial_name); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('phone1')); ?>:</b>
	<?php echo CHtml::encode($data->phone1); ?>


	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('phone2')); ?>:</b>
	<?php echo CHtml::encode($data->phone2); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br/>	  
		
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br/>


	<br/>


</div>	
<br>




<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
