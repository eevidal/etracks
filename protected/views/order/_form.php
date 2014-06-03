<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'horizontal',
	 'type' => 'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); 
/*
$criter = new CDbCriteria;
$criter->order = 'name ASC';

$status <- Status::model()->findAll($criter);*/
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model,$model_cli,$model_equi); ?>

	
<div id=cliente>
<h2>Datos del cliente             <?php echo $form->dropDownListGroup($model_cli,'type', array('wrapperHtmlOptions' =>  array(
									    'class' => 'col-sm-8',
									    ),
								      'widgetOptions' => array(
									      'data' => array('PÚBLICO', 'REVENDEDOR'),
										    'htmlOptions' => array(),
										)
									)
								); ?></h2>
								
	  <?php echo $form->typeAheadGroup($model_cli,'name',array(
							'widgetOptions' => array(
								  'options'=>array(
									  'hint' => true,
									  'highlight' => true,
									  'minLength' => 1
									  ),
								'datasets'=>($model_cli->name)
								),
							'labelOptions' => array(
								    'label' => 'Chtulhu sleeps in:',
								    )
							)
					); ?>							
	 <?php //echo $form->label($model_cli,Yii::t('messages','Nombre'));
	 
	 $this->widget('ext.typeahead.TypeAhead',array(
       'model' => $model_cli,
       'attribute' => 'name',
       'options' => array(
           array(
               'name' => 'accounts',
               'local' => array(
                   'jquery',
                   'ajax',
                   'bootstrap'
               ),
           )
       ),
));
 ?>
	 
	 
	 
	 
  <?php echo $form->hiddenField($model_cli,'id',array()); ?>
// 	 <?php 
// 	 $this->widget('zii.widgets.jui.CJuiAutoComplete',
//     array(
//       'model'=>$model_cli,
//       'attribute'=>'name',
//       'source'=>$this->createUrl('order/autocomplete'),
//       //'htmlOptions'=>array('placeholder'=>'Any'),
//       'options'=>
//          array(
//                'showAnim'=>'fold',
//                'select'=>"js:function(clients, ui) {
//                   $('#Client_id').val(ui.item.id);
//                          }"
//                 ),
//       'cssFile'=>false,
//     )); ?>
	

        <?php echo $form->textFieldGroup($model_cli,'comercial_name',array('class'=>'span8')); ?>

<br>
<br>
        <?php echo $form->textFieldGroup($model_cli,'address1',array('class'=>'span5','maxlength'=>128)); ?>
           <?php echo $form->textFieldGroup($model_cli,'address2',array('class'=>'span5')); ?>
               <?php echo $form->textFieldGroup($model_cli,'city',array('class'=>'span5','maxlength'=>128)); ?>
          <?php echo $form->textFieldGroup($model_cli,'postal_code',array('class'=>'input-large')); ?>     

        <?php echo $form->textFieldGroup($model_cli,'phone1',array('class'=>'span5','maxlength'=>128)); ?>

        <?php echo $form->textFieldGroup($model_cli,'phone2',array('class'=>'span5','maxlength'=>128)); ?>

        <?php echo $form->textFieldGroup($model_cli,'mail',array('class'=>'span5','maxlength'=>128)); ?>

   

    

        <?php echo $form->textFieldGroup($model_cli,'contact',array('class'=>'span5')); ?>
 <br> 
           <?php echo $form->textAreaGroup($model_cli,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
      
 
</div>	
<div>
<h2>Datos del Equipo</h2>
	<?php //echo $form->textFieldGroup($model,'equipment_id',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldGroup($model,'client_id',array('class'=>'span5')); ?>

        <?php echo $form->textFieldGroup($model_equi,'name',array('class'=>'span5')); ?>

        <?php echo $form->textFieldGroup($model_equi,'serie',array('class'=>'span5')); ?>
	
<br>
	<?php echo $form->textAreaGroup($model,'fail',array('class'=>'span8')); ?>

	<?php echo $form->checkBoxGroup($model,'warranty'); ?>
<br>	
	<?php echo $form->textAreaGroup($model,'adicional',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

</div>	
<br>	
	



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
