<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'name',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'comercial_name',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'address1',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldGroup($model,'phone1',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldGroup($model,'phone2',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldGroup($model,'mail',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textAreaGroup($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldGroup($model,'city',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldGroup($model,'contact',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'postal_code',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'address2',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
