<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?>
	<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('observation')); ?>:</b>
	<font color="#FF0000"><?php echo CHtml::encode($data->observation); ?></font>
</div>

