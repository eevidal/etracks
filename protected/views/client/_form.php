<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'client-form',
	'type'=>'inline',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
								
 
 	 <?php 
	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
    //  'model'=>$model_cli,

      'name'=>'Client_typo',
        'source'=>array('PUBLICO','REVENDEDOR'),
       'htmlOptions'=>array(
        'style'=>'height:34px;width:178px;margin-right:0.5em;', 'placeholder'=>'PUBLICO / REVENDEDOR',  
        'select'=>'js:function(event, ui) {$(".Client_type").val(ui.item["type"]);}'
    ),
         )); ?>
<?php echo $form->hiddenField($model,'type',array('class'=>'span5')); ?>								
<br>
	<?php echo $form->textFieldGroup($model,'name',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'comercial_name',array('class'=>'span8')); ?>

	<?php echo $form->textFieldGroup($model,'address1',array('class'=>'span5','maxlength'=>128)); ?>
	

	<?php echo $form->textFieldGroup($model,'city',array('class'=>'span5','maxlength'=>128)); ?>
	
	<?php echo $form->textFieldGroup($model,'postal_code',array('class'=>'span5')); ?>
		<?php echo $form->textFieldGroup($model,'address2',array('class'=>'span5')); ?>
	<?php echo $form->textFieldGroup($model,'phone1',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldGroup($model,'phone2',array('class'=>'span5','maxlength'=>128)); ?>
	<?php echo $form->textFieldGroup($model,'contact',array('class'=>'span5')); ?>
	

	<?php echo $form->textFieldGroup($model,'mail',array('class'=>'span5','maxlength'=>128)); ?>


	<?php echo $form->textAreaGroup($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>


	

	



	

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
