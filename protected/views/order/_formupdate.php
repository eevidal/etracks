<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'horizontal',
	// 'type' => 'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); 
/*
$criter = new CDbCriteria;
$criter->order = 'name ASC';

$status <- Status::model()->findAll($criter);*/
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	 <?php echo $form->textFieldGroup($model,'date',array('class'=>'span5')); ?>

       <?php echo $form->textFieldGroup($model,'equipment_id',array('class'=>'span5')); ?>
	<?php echo $form->textFieldGroup($model,'client_id',array('class'=>'span5')); ?>
<br>
	<?php echo $form->textAreaGroup($model,'fail',array('class'=>'span8')); ?>

	<?php echo $form->checkBoxGroup($model,'warranty'); ?>
<br>	
	<?php echo $form->textAreaGroup($model,'adicional',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>


<br>	
	



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',

			//'label'=>$model_cli->isNewRecord ? 'Create' : 'Save',
			//'label'=>$model_equi->isNewRecord ? 'Create' : 'Save',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
