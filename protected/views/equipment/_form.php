<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'equipment-form',
	'enableAjaxValidation'=>false,
)); ?>

<!-- <p class="help-block">Fields with <span class="required">*</span> are required.</p> -->

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'name',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'serie',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
