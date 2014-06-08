<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('technician')); ?>:</b>
	<?php echo CHtml::encode($data->technician); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report')); ?>:</b>
	<?php echo CHtml::encode($data->report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation')); ?>:</b>
	<?php echo CHtml::encode($data->observation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />


</div>