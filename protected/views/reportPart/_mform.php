<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'report-part-form',
	'type'=>'inline',
	'htmlOptions' => array('class' => 'well'),
	'enableAjaxValidation'=>false,
)); ?>



<?php echo $form->errorSummary($model); ?>

 <h5>Partes</h5>
 <?php  
   $this->widget(
    'booster.widgets.TbSelect2',
    array(
       'model'=>$model_part,
        'name' => 'Part',
        'data' => CHtml::listData(Part::model()->findAll(), 'id', 'description', 'name'),
        'htmlOptions' => array(
            'multiple' => 'multiple',
            
        ),
    )
);
 ?>
 
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
