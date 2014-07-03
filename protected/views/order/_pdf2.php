<style>

body,p,div{
	color:#2E2E2E;

}

#footer
{
	padding: 10px;
	font-size: 0.8em;
	text-align: center;
	border-top: 1px solid #C9E0ED;
}

#marcas{ 
	height:46px;
	width:670px; 
	filter: alpha(opacity=40);
	padding: 20px;
	margin-top:250px;
} 

#headerpdf{ 
	height:130px;
	width:700px; 
	color: #333;
	filter: alpha(opacity=40);
} 

#datos{ 
	height:130px;
	width:238px; 
	filter: alpha(opacity=40);
	float: left;
}

#firmaJeanmco{ 
	font-size: 80%;
 	padding: 10px; 
	float: left;
	margin-left: 5px;
	width:200px; 
} 

#firmaCliente{ 
	font-size: 80%;
 	padding: 10px; 
	float: right;
	width:200px; 
}
#firma{ 
	font-size: 80%;
 	padding: 10px; 
	float: right;
	width:200px; 
	border: 1px solid #6E6E6E;
	border-radius: 20px;
	position:relative;
	margin-top:5px;
	margin-left:500px;
	text-align: center;
}


#logopdf{ 
 	height:46px; 
	width:432px; 
	filter: alpha(opacity=40);
	padding: 15px; 
	float: right;

} 
#contrato{ 
	filter: alpha(opacity=40);
	padding: 20px;
	margin-left:1.5em;
/* 	width:670px;  */
} 

#contract{ 
	border: 1px solid #6E6E6E;
	border-radius: 25px;
} 

#observaciones{ 
	border: 1px solid #6E6E6E;
	border-radius: 25px;
	height:100px;
	padding-bottom:10px;
/* 	width:710px;  */
} 

.view{ 
	padding: 20px;
	margin-left:1.5em;
/* 	width:670px;  */
	border: 1px solid #6E6E6E;
	border-radius: 25px;

} 
.view1{ 
	padding-left:12px; 
	width:700px; 

}

table,tr,td {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	padding: 3px; 
  }
 
</style>
<page>
<br>
<?php $data=$model ?>

<table id="headerpdf" >
<tr>
 <td  valign="top">
 <table>
 <tr><td colspan="2" valign="top">
	<font  style="color:#6E6E6E"><h1 >ORDEN <br>DE RECEPCIÓN</h1></font>
 </td></tr>
 <tr><td style="border: 1px solid #6E6E6E;  " align="center" >
	NÚMERO
	
	<br>
 </td>	
 <td style="border: 1px solid #6E6E6E;" align="center" >	
	FECHA DE INGRESO
	
 </td></tr>
 
 <tr><td  style="padding: 3px; border: 1px solid #6E6E6E;" align="center">
	
	<?php echo CHtml::encode($data->id); ?>
	<br>
 </td>	
 <td  style="padding: 3px;border: 1px solid #6E6E6E; " align="center" >	
	
	<?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?>
 </td></tr>
 
 
 </table>	
 </td><td><font  style="color:#FFFFFF">*****</font></td>
 <td id="logopdf">
	<img src="http://localhost/etracks/images/header.pdf.jpg" >
 </td>
</tr>
</table>
<div  class="view1">
<div class="view">


	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br>
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
</div>	
<br>


<div id="contract">	
<div id="contrato">
<b>(1)</b> Condiciones generales: Jeanmco S.R.L. No se responsabiliza por el origen de los equipos y/o partes recibidos para reparación.
<b>(2)</b> Jeanmco S.R.L. asume que el cliente ha realizado el respaldo de su información y no resultará perjudicado por la pérdida de la misma. 
<b>(3)</b> Los gastos de traslado de equipos son por cuenta del cliente. 
<b>(4)</b> Los equipos, durante el traslado y permanencia en n/Laboratorios corren por cuenta y riesgo de su propietario. 
<b>(5)</b> Cuando se realicen presupuestos y no sean aceptados se cobrará el importe mínimo por la intervención. 
<b>(6)</b> El estado de los equipos o partes recibidas por Jeanmco S.R.L., serán revisadas por el 
área Servicio Técnico dentro de las 24 horas de haberse efectuado la recepción, a fin de corroborar que no existan desperfectos y/o roturas debidas a negligencia, 
uso incorrecto, o de cualquier otra índole, que no hayan sido comunicados al momento de la recepción. 
<b>(7)</b> El cliente manifiesta en carácter de declaración jurada que el software contenido en los medios magnéticos de los equipos que entrega para la reparación, es de su propiedad, deslindando a Jeanmco S.R.L. de toda 
responsabilidad por los mismos. 
<b>(8)</b> Transcurridos 90 días de la fecha de ingreso el equipo se considerará abandonado, en tal caso Jeanmco S.R.L. quedará 
facultado para disponer del mismo, perdiendo el cliente todo derecho a reclamo o indemnización alguna (Art. 2525 y 2526 del Cod. Civil).
<b>(9)</b> El criterio técnico para efectuar la reparación es determinado por Jeanmco S.R.L. A su real saber y entender.



</div>
<table>
<tr><td align="center">
<div id="firmaJeanmco">
	.....................................................
<br><br>  Por Jeanmco S.R.L	
</div></td>
<td><font  style="color:#FFFFFF">*******************************</font></td>

<td align="center">
<div id="firmaCliente">
	.....................................................
<br><br>  Firma Cliente	
</div></td></tr>



</table>
</div>
<!-- <div id="footer">    </div> -->
<br/>
<div style="border-top: thin dotted; with:670px;"></div>
<div class="view"  >

<font  style="color:#6E6E6E"><h3>Para el departamento técnico</h3></font>
<br/>
<b>Orden de trabajo Nº: </b>
<?php echo CHtml::encode($data->id); ?>
<br>
<b>Fecha de Ingreso:</b>
<?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?>
	<br/>
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br/>
	<b>Nº de serie</b>
	<?php echo CHtml::encode($data->equipment->serie); ?>
	<br/>
	<b><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php if($data->warranty) echo "Sí";
	else  echo "No"; ?>
	<br/>
		<b><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>
	<br>
</div>	


</div>
<!-- <div id="marcas"><img src="http://localhost/etracks/images/marcas.pdf.jpg" ></div> -->
</page>

<page>
<br>
<?php $data=$model ?>
<table id="headerpdf" >
<tr>
 <td  valign="top">
 <table>
 <tr><td colspan="2" valign="top">
	<font  style="color:#6E6E6E"><h1 >ORDEN <br>DE RECEPCIÓN</h1></font>
 </td></tr>
 <tr><td style="border: 1px solid #6E6E6E;  " align="center" >
	NÚMERO
	
	<br>
 </td>	
 <td style="border: 1px solid #6E6E6E;" align="center" >	
	FECHA DE INGRESO
	
 </td></tr>
 
 <tr><td  style="padding: 3px; border: 1px solid #6E6E6E;" align="center">
	
	<?php echo CHtml::encode($data->id); ?>
	<br>
 </td>	
 <td  style="padding: 3px;border: 1px solid #6E6E6E; " align="center" >	
	
<?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?>
 </td></tr>
 
 
 </table>	
 </td><td><font  style="color:#FFFFFF">*****</font></td>
 <td id="logopdf">
	<img src="http://localhost/etracks/images/header.pdf.jpg" >
 </td>
</tr>
</table>
<div  class="view1">
<div class="view">


	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br>
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
</div>	
<br>


<div id="contract">	
<div id="contrato">
<b>(1)</b> Condiciones generales: Jeanmco S.R.L. No se responsabiliza por el origen de los equipos y/o partes recibidos para reparación.
<b>(2)</b> Jeanmco S.R.L. asume que el cliente ha realizado el respaldo de su información y no resultará perjudicado por la pérdida de la misma. 
<b>(3)</b> Los gastos de traslado de equipos son por cuenta del cliente. 
<b>(4)</b> Los equipos, durante el traslado y permanencia en n/Laboratorios corren por cuenta y riesgo de su propietario. 
<b>(5)</b> Cuando se realicen presupuestos y no sean aceptados se cobrará el importe mínimo por la intervención. 
<b>(6)</b> El estado de los equipos o partes recibidas por Jeanmco S.R.L., serán revisadas por el 
área Servicio Técnico dentro de las 24 horas de haberse efectuado la recepción, a fin de corroborar que no existan desperfectos y/o roturas debidas a negligencia, 
uso incorrecto, o de cualquier otra índole, que no hayan sido comunicados al momento de la recepción. 
<b>(7)</b> El cliente manifiesta en carácter de declaración jurada que el software contenido en los medios magnéticos de los equipos que entrega para la reparación, es de su propiedad, deslindando a Jeanmco S.R.L. de toda 
responsabilidad por los mismos. 
<b>(8)</b> Transcurridos 90 días de la fecha de ingreso el equipo se considerará abandonado, en tal caso Jeanmco S.R.L. quedará 
facultado para disponer del mismo, perdiendo el cliente todo derecho a reclamo o indemnización alguna (Art. 2525 y 2526 del Cod. Civil).
<b>(9)</b> El criterio técnico para efectuar la reparación es determinado por Jeanmco S.R.L. A su real saber y entender.



</div>
<table>
<tr><td align="center">
<div id="firmaJeanmco">
	.....................................................
<br><br>  Por Jeanmco S.R.L	
</div></td>
<td><font  style="color:#FFFFFF">*******************************</font></td>

<td align="center">
<div id="firmaCliente">
	.....................................................
<br><br>  Firma Cliente	
</div></td></tr>



</table>
</div>
<!-- <div id="footer">    </div> -->
<br>
<table>
 <tr><td style="border: 1px solid #6E6E6E;  " align="center" >
	FECHA DE ENTREGA
	
	<br>
 </td>	
 <td style="border: 1px solid #6E6E6E;" align="center" >	
	REMITO DE ENTREGA
	
 </td>
  <td style="border: 1px solid #6E6E6E;" align="center" >	
	FACTURA NÚMERO
	
 </td>
 </tr>
 
 <tr><td  style="padding: 3px; border: 1px solid #6E6E6E;" align="center">
<br>
 </td>	
 <td  style="padding: 3px;border: 1px solid #6E6E6E; " align="center" >	
 </td>
  <td  style="padding: 3px;border: 1px solid #6E6E6E; " align="center" >	
 </td>
 </tr>
 
</table>

<div id="observaciones"> <br> &nbsp; &nbsp; &nbsp;Observaciones:</div>
<div id="firma"><br><br><br>.....................................................
<br><br>  Firma Cliente
<br> Conformidad de Entrega.
</div>
</div>

</page>