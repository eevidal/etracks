<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->datepickerGroup($model,'date',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

		<?php echo $form->textFieldGroup($model,'equipment_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'client_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldGroup($model,'fail',array('class'=>'span5')); ?>

		<?php echo $form->checkBoxGroup($model,'warranty'); ?>

		<?php echo $form->textFieldGroup($model,'status_id',array('class'=>'span5')); ?>

		<?php echo $form->textAreaGroup($model,'adicional',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
