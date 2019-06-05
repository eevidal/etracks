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
<?php $data=$model_order?>

<table id="headerpdf" >
<tr>
 <td  >
 <table   >
 <tr><td ><?php echo "<h3> Rosario, ".date("m.d.y")."</h3>";?>
	<!--<font  style="color:#6E6E6E"><h3 >PRESUPUESTO</h3></font>-->
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

<br>



<div class="view">

Detalle de presupuesto:<br>
</div>
<div class="view">
<pre>
<?php echo $model->budget ?>
</pre>




</div>




<br/><br/><br/>
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
<!-- <div id="footer">    </div> -->

</div>
<!-- <div id="marcas"><img src="http://localhost/etracks/images/marcas.pdf.jpg" ></div> -->
</page>
