<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_order')); ?>:</b>
	<?php echo CHtml::encode($data->id_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_report')); ?>:</b>
	<?php echo CHtml::encode($data->id_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget')); ?>:</b>
	<?php echo CHtml::encode($data->budget); ?>
	<br />


</div>