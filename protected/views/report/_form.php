<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-form',
	 'type' => 'inline',
	'enableAjaxValidation'=>false,
)); ?>
 	
<h1>Informe técnico <?php echo $form->textFieldGroup($model,'technician',array('class'=>'span5')); ?></h1>

<h2>Datos del cliente           
						
<br>
	  <?php echo $form->textFieldGroup($model_cli,'type',array('class'=>'span5')); ?></h2>
	  <?php echo $form->textFieldGroup($model_cli,'name',array('class'=>'span5')); ?></h2>
	  <?php echo $form->textFieldGroup($model_cli,'comercial_name',array('class'=>'span8')); ?>
          <?php echo $form->textFieldGroup($model_cli,'city',array('class'=>'span5','maxlength'=>128)); ?>
  
          <?php echo $form->textFieldGroup($model_cli,'phone1',array('class'=>'span5','maxlength'=>128)); ?>
          <?php echo $form->textFieldGroup($model_cli,'phone2',array('class'=>'span5','maxlength'=>128)); ?>
          <?php echo $form->textFieldGroup($model_cli,'mail',array('class'=>'span5','maxlength'=>128)); ?>

   

    

        <?php echo $form->textFieldGroup($model_cli,'contact',array('class'=>'span5')); ?>
 <br> 
           <?php echo $form->textAreaGroup($model_cli,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
      
 

<h2>Datos del Equipo </h2>

     
<?php echo $form->textFieldGroup($model_equi,'serie',array('class'=>'span5')); ?>
     <?php echo $form->textFieldGroup($model_equi,'name',array('class'=>'span5')); ?>

	<?php echo $form->textAreaGroup($model_order,'fail',array('class'=>'span8')); ?>

	<?php echo $form->checkBoxGroup($model_order,'warranty'); ?>

	<?php echo $form->textAreaGroup($model_order,'adicional',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>


<h2>Informe </h2>
<?php echo $form->errorSummary($model); ?>

	

	<?php echo $form->textAreaGroup($model,'report',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldGroup($model,'observation',array('class'=>'span5')); ?>

	<?php echo $form->textFieldGroup($model,'order_id',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
