<style>

#footer
{
	padding: 10px;
	margin: 10px 20px;
	font-size: 0.8em;
	text-align: center;
	border-top: 1px solid #C9E0ED;
}

#marcas{ 
	height:46px;
	width:1005px; 
	filter: alpha(opacity=40);
	padding: 20px;
	margin-left:1.5em;

} 

</style>
<page>
<div class="view">
<?php $data=$model ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>


	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<b>Nº de serie</b>
	<?php echo CHtml::encode($data->equipment->serie); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php if($data->warranty) echo "Sí";
	else  echo "No"; ?>
	<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>
	<br>
<div id="contrato">
(1) Condiciones generales: Jeanmco S.R.L. No se responsabiliza por el origen de los equipos y/o partes recibidos para reparación.
(2) Jeanmco S.R.L. asume que el cliente ha realizado el respaldo de su información y no resultará perjudicado por la pérdida de la misma. 
(3) Los gastos de traslado de equipos son por cuenta del cliente . 
(4) Los equipos, durante el traslado y permanencia en n/Laboratorios corren por cuenta y riesgo de su propietario. 
(5) Cuando se realicen presupuestos y no sean aceptados se cobrará el importe mínimo por la intervención. 
(6) El estado de los equipos o partes recibidas por Jeanmco S.R.L., serán revisadas por el 
área Servicio Técnico dentro de las 24 horas de haberse efectuado la recepción, a fin de corroborar que no existan desperfectos y/o roturas debidas a negligencia, 
uso incorrecto, o de cualquier otra índole, que no hayan sido comunicados al momento de la recepción. 
(7) El cliente manifiesta en carácter de declaración jurada 
que el software contenido en los medios magnéticos de los equipos que entrega para la reparación, es de su propiedad, deslindando a Jeanmco S.R.L. de toda 
responsabilidad por los mismos. 
(8) Transcurridos 90 días de la fecha de ingreso el equipo se considerará abandonado, en tal caso Jeanmco S.R.L. quedará 
facultado para disponer del mismo, perdiendo el cliente todo derecho a reclamo o indemnización alguna (Art. 2525 y 2526 del Cod. Civil).
(9) El criterio técnico para 
efectuar la reparación es determinado por Jeanmco S.R.L. A su real saber y entender.

</div>
<div id="footer">    </div>
<div id="marcas"><img src="http://localhost/etracks/css/marcas.jpg" ></div>
</div>
</page>