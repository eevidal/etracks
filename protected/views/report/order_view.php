<?php
$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Listar Informes','url'=>array('index')),
//array('label'=>'Create Report','url'=>array('create')),
array('label'=>'Actualizar Informe','url'=>array('update','id'=>$model->id)),
// array('label'=>'Delete Report','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Administrar Informes','url'=>array('admin')),
);
?>

<h2>Informe nº<?php echo $model->id; ?></h2>
<div class="view">
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'type'=>'striped bordered condensed',
'attributes'=>array(
		//'id',
		'technician',
		'report',
		'observation',
		array('label'=>'Order', 'value'=>$model->order->id),
),
)); ?>

<h3>Partes</h3>
 <?php $parts=$model_part_report;

	//$return_array[]=array();
	foreach($parts as $_part) 
	{	
		$part = Part::model()->findByPk($_part->part_id);
		$return_array[] = array(
					'part'=>$part->name,
					'id'=>$_part->id,
					'part_id'=>$part->id,
					'report_id'=>$_part->report_id,
					'description'=>$part->description,
					'stock'=>$part->stock,
					'quantity'=>$_part->quantity,
					);
			}

if(!empty($return_array)) 
{
	echo "<table class='items table'><thead>";
	 echo "<tr>";
	echo "<th>".CHtml::encode($model_part->getAttributeLabel('name'))."</th>";
	echo "<th>".CHtml::encode($model_part->getAttributeLabel('description'))."</th>";
	echo "<th>".CHtml::encode($model_part->getAttributeLabel('stock'))."</th>";

	echo "<th>Cantidad</th>";
	echo "<th class='button-column'>&nbsp;</th>";
	echo "</tr></thead>";
	foreach ($return_array as $p)
	{
	 echo "<tr>";
	 echo "<td>".$p['part']."</td>";
	 echo "<td>".$p['description']."</td>";
	 echo "<td>".$p['stock']."</td>";
	 echo "<td>".$p['quantity']."</td>";
// 	echo "<td class='button-column'>
// 	 <a class='update'  data-toggle='tooltip'
// 	 href='/etracks/index.php?r=reportPart/update&id=".$p['id']."'data-original-title='Update'>
// 	 <i class='glyphicon glyphicon-pencil'></i></a>
// 	 <a class='delete'  data-toggle='tooltip' href='/etracks/index.php?r=reportPart/delete&id=".$p['id']."' data-original-title='Delete'>
// 	 <i class='glyphicon glyphicon-trash'></i></a></td>";
// 	 echo "</tr>";
 	}
	echo "</table>";
}




?>
</div>   
   
<div class="view">
<?php $data=$model_equipment; ?>


	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>

<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('serie')); ?>:</b>
	<?php echo CHtml::encode($data->serie); ?>
	<br/>


<?php $data=$model_order; ?>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('order/view','id'=>$data->id)); ?>

<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->name); ?>
	<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php $gar= array('Sí', 'No'); echo CHtml::encode($data->fail); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($gar[$data->warranty]); ?>
	<br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>

<?php //$parts=$model_part_report;?>

</div>




<div class="view">
<h4 class="report">Datos del cliente           </h4>
<?php $data=$model_client; ?>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?><br/>
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('client/view','id'=>$data->id)); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('comercial_name')); ?>:</b>
	<?php echo CHtml::encode($data->comercial_name); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('phone1')); ?>:</b>
	<?php echo CHtml::encode($data->phone1); ?>


	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('phone2')); ?>:</b>
	<?php echo CHtml::encode($data->phone2); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br/>	  
		
	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br/>

	<b class="report"><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br/>


	<br/>


</div>	