<style>

body,p,div{
/* 	color:#2E2E2E; */
	color:#6E6E6E;
	font-family: Helvetica, sans-serif;

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
	height:120px;
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
	border: 1px solid #A4A4A4;
	border-radius: 20px;
	position:relative;
	margin-top:5px;
	margin-left:500px;
	text-align: center;
}


#logopdf{ 
 	height:46px; 
	width:440px; 
/* filter: alpha(opacity=40); */
	padding: 10px; 
	float: right;

} 
#contrato{ 
	filter: alpha(opacity=40);
	padding: 20px;
	margin-left:1.5em;
	font-size:70%;
/* 	width:670px;  */
} 

#contract{ 
	border: 1px solid #A4A4A4;
	border-radius: 25px;
}

#info{
	border: 1px solid #A4A4A4;
	border-radius: 25px;
	height: 200px;
	padding:20px;
} 

#observaciones{ 
	border: 1px solid #A4A4A4;
	border-radius: 25px;
	height:100px;
	padding-bottom:10px;
/* 	width:710px;  */
} 

.texto{ 
	padding: 5px;
	margin-left:10px;
/* 	width:670px;  */

	font-size:110%;
} 

#container > div
{
    display: inline-block;
/*     border: solid 1px #000; */
}
#container
{
/*    border: solid 1px #ff0000; */
/*     text-align: center; */
    margin: 0px auto;
/*     width: 40%; */
} 


.info{
	border:1px;
	height:18px;
	margin:0px;
	padding-bottom:0px;	


}

.logo{ 
	padding: 5px;
	margin-left:20px;
/* 	width:670px;  */


} 

.view{ 
	padding: 20px;
	margin-left:1.5em;
/* 	width:670px;  */
	border: 1px solid #A4A4A4;
	border-radius: 25px;
	font-size:130%;
	line-height: 130% 

} 
.view1{ 
	padding-left:12px;
	margin-top:-15px;
	width:700px; 

}

table,tr,td {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	padding: 3px; 
  }
 
</style>

<?php
function count_digit($number) {
return strlen((string) $number);
}
?>

<page>
<br>
<?php $data=$model ?>

<table id="headerpdf" >
<tr>
 <td  >
 <table   >
 <tr><td >
	<font  style="color:#6E6E6E"><h1 >ORDEN <br>DE RECEPCIÓN</h1></font>
 </td></tr>
 <tr><td>
	<table style="margin-left:-10px;margin-top:-3px;">
	<tr><td>
	 <div style="border: 1px solid #A4A4A4;margin-left:0px;  border-radius: 10px;width:150px;height:20px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;border-top-right-radius: 8px;">NÚMERO </div>
		<div style="font-size:130%;text-align: center;padding:3px;">
		<b><?php if(count_digit($data->id)==1 ) echo "IR-00000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==2 ) echo "IR-0000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==3 ) echo "IR-000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==4 ) echo "IR-00".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==5 ) echo "IR-0".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==6 ) echo "IR-".CHtml::encode($data->id);?></b>
		</div>
	 </div>
	 </td>
	
	<td>
	 <div style="border: 1px solid #A4A4A4; border-radius: 10px; width:150px;height:30px;"> 
		<div style="border: 1px solid;border-color:#A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;	border-top-right-radius: 8px;">FECHA DE INGRESO</div>
		<div style="font-size:130%;text-align: center;padding:3px;"><?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?> </div>
	 </div>
	</td>
	</tr>
	</table>
 </td></tr>
 

 </table>	
 </td><td><font  style="color:#FFFFFF">*****</font></td>
 <td id="logopdf">
	<div class="logo">
	<table>
	<tr>
	<td> <img src="http://localhost/etracks/images/jeanmco_logo.jpg" style="padding-top: 3px;" ></td>
	<td> <img src="http://localhost/etracks/images/jeanmco.jpg"><br/>
	<div class="texto">
	JEANMCO S.R.L <br/>
	RIOJA 3034/38 ROSARIO <br/>
	TEL/FAX 0341 4370899 <br/>
	info@jeanmco.com.ar <br/>
	<b>www.jeanmco.com.ar</b> <br/>
	</div>
	</td>
	</tr>
	</table>
	</div>
 </td>
</tr>
</table>

<div  class="view1">
<div class="view">


	
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br>
	<b>Nº de serie:</b>
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

</div>
<!-- <div id="marcas"><img src="http://localhost/etracks/images/marcas.pdf.jpg" ></div> -->
</page>

<page>
<br>
<?php $data=$model ?>
<table id="headerpdf" >
<tr>
 <td>
  
 
 <table>
 <tr><td>
	<font  style="color:#6E6E6E"><h1 >ORDEN <br>DE RECEPCIÓN</h1></font>
 </td></tr>
 <tr><td>
	<table style="margin-left:-10px;">
	<tr><td>
	 <div style=" border: 1px solid #A4A4A4;margin-left:0px;  border-radius: 10px;width:150px;height:20px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;border-top-right-radius: 8px;">NÚMERO </div>
		<div style="font-size:130%;text-align: center;padding:3px;">
		<b><?php if(count_digit($data->id)==1 ) echo "IR-00000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==2 ) echo "IR-0000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==3 ) echo "IR-000".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==4 ) echo "IR-00".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==5 ) echo "IR-0".CHtml::encode($data->id);?>
		<?php if(count_digit($data->id)==6 ) echo "IR-".CHtml::encode($data->id);?></b>
		</div>
	 </div>
	 </td>
	
	<td>
	 <div style="border: 1px solid #A4A4A4; border-radius: 10px; width:150px;height:30px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;	border-top-right-radius: 8px;">FECHA DE INGRESO</div>
		<div style="font-size:130%;text-align: center;padding:3px;"><?php echo CHtml::encode(date("d-m-Y",strtotime($data->date))); ?> </div>
	 </div>
	</td>
	</tr>
	</table>
 </td></tr>
 

 </table>	
 </td><td><font  style="color:#FFFFFF">*****</font></td>
 <td id="logopdf">
	<div class="logo">
	<table>
	<tr>
	<td> <img src="http://localhost/etracks/images/jeanmco_logo.jpg" style="padding-top: 3px;"></td>
	<td> <img src="http://localhost/etracks/images/jeanmco.jpg"><br/>
	<div class="texto">
	JEANMCO S.R.L <br/>
	RIOJA 3034/38 ROSARIO <br/>
	TEL/FAX 0341 4370899 <br/>
	info@jeanmco.com.ar <br/>
	<b>www.jeanmco.com.ar </b><br/>
	</div>
	</td>
	</tr>
	</table>
	</div>
 </td>
</tr>
</table>


<div  class="view1">
<div class="view">


	
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment->name); ?>
	<br>
	<b>Nº de serie:</b>
	<?php echo CHtml::encode($data->equipment->serie); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fail')); ?>:</b>
	<?php echo CHtml::encode($data->fail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php if($data->warranty) echo "Sí";
	else  echo "No"; ?>
	<br/>
		<b><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>
	<br/>
	<b>
	Tipo:</b>
	<?php echo CHtml::encode($data->client->type); ?>
	<br/>
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
 <tr><td>
	<div style="border: 1px solid #A4A4A4; border-radius: 10px; width:160px;height:30px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;	border-top-right-radius: 8px;">FECHA DE ENTREGA</div>
		<div style="font-size:130%;text-align: center;padding:3px;"><br> </div>
	 </div>
 </td>	
 <td>	
 <div style="border: 1px solid #A4A4A4; border-radius: 10px; width:160px;height:30px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;	border-top-right-radius: 8px;">REMITO DE ENTREGA</div>
		<div style="font-size:130%;text-align: center;padding:3px;"> <br></div>
	 </div>
	
	
 </td>
  <td>
  <div style="border: 1px solid #A4A4A4; border-radius: 10px; width:160px;height:30px;"> 
		<div style="border: 1px solid;border-color: #A4A4A4;text-align: center;background-color:#A4A4A4;
		color:#ffffff;border-top-left-radius: 8px;	border-top-right-radius: 8px;">FACTURA NÚMERO</div>
		<div style="font-size:130%;text-align: center;padding:3px;"><br></div>
	 </div>	
	
	
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

<page>

<br/>
<br/>
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
<br>
<div id="info">
<h3>Informe:</h3>
</div>
<br>
<table style="border:1px ;">
<tr style="border:1px;"><td>
<div style="width:200px; ">
N° PARTE</div></td>
<td><div style="width:100px;">CANT.</div></td>

<td><div height style="width:410px;">DESCRIPCIÓN</div></td>
</tr>

<?php

for($i=0;$i<11;$i++){
		echo "<tr ><td>
			<div class='info'></div></td>
		<td><div class='info'></div></td>
		<td><div class='info'></div></td>
		</tr>";

}

?>
</table>
<br>
<h4>Tecnico:.................................... 
Obsevaciones...................................
Contador...............................
</h4>
<h5>Hora inicio:................... Hora de Fin:...........................</h5>
	
</page>

