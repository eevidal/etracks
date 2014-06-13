<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-part-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'part_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'report_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'quantity',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
