<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-part-form',
	'type'=>'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

	
<b><?php echo CHtml::encode($model_report->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($model_report->id); ?>
	<br/><br/>
	<?php 
	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model_part,
      'attribute'=>'name',
      'name'=>'Part_name',
      'source'=>  $this->createUrl('PartAutocomplete'),
      'htmlOptions'=>array('autocomplete'=>'off', 'placeholder'=>'Nombre'),
      'options'=>
         array(
               'showAnim'=>'fold',
               'select'=>'js:function(event, ui) 
                { $(".Part_name").val(ui.item["name"]); 
		  $("#Part_description").val(ui.item["description"]); 
		  $("#Part_id").val(ui.item["id"]); 
		  $("#Part_stock").val(ui.item["stock"]); 
		    $("#ReportPart_part_id").val(ui.item["id"]); 
		  }',
                 
                ),
      'cssFile'=>true,
   )); ?>
                
	
<!--	<?php// echo $form->textFieldGroup($model_part,'name',array('class'=>'span5')); ?>-->
<br/>
	<?php echo $form->textFieldGroup($model_part,'description',array( 'class'=>'span5')); ?>
	

	<?php echo $form->textFieldGroup($model_part,'stock',array('class'=>'span5')); ?>
	<?php echo $form->textFieldGroup($model,'quantity',array('class'=>'span5')); ?>
		<?php echo $form->hiddenField($model,'part_id'); ?>
		<?php echo $form->hiddenField($model,'report_id', array('value'=>$model_report->id)); ?>
 
 <br/>
 <br>
 
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
