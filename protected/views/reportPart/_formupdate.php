<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-part-form',
	'type'=>'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

 
	
<!--	<?php// echo $form->textFieldGroup($model_part,'name',array('class'=>'span5')); ?>-->
<br/>


<div class="row">
	<div class="span2"><b><?php echo CHtml::encode($model_part->getAttributeLabel('name')); ?>:</b></div>
	<div class="span2"><b><?php echo CHtml::encode($model_part->getAttributeLabel('description')); ?>:</b></div>
	<div class="span1"><b><?php echo CHtml::encode($model_part->getAttributeLabel('stock')); ?>:</b></div>
	<div class="span1"><b><?php echo CHtml::encode($model->getAttributeLabel('quantity')); ?>:</b></div>
</div><br>
<div class="row">
	<div class="span2"><?php echo CHtml::encode($model_part->name); ?></div>
	<div class="span2"><?php echo CHtml::encode($model_part->description); ?></div>
	<div class="span1"><?php echo CHtml::encode($model_part->stock); ?></div>
	<div class="span1"><?php echo $form->textFieldGroup($model,'quantity',array('class'=>'span2')); ?></div>
</div>		

 
 <br/>
 <br>
 
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
