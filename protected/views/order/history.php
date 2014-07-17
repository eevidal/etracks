<?php
$this->breadcrumbs=array(
	'Orders',
);

// $this->menu=array(
// 	array('label'=>'Nuevo Ingreso','url'=>array('create')),
// 	array('label'=>'Administrar Ordenes','url'=>array('admin')),
// );
?>

<h1>Ordenes de trabajo</h1>



<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Ordenes Entregadas</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(8);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		foreach($orders as $order) {
			// var_dump($order);
			echo "<tr>
			<td>".$order["id"]."</td>
			<td>".$order["client"]."</td>
			<td>".$order["equipment"]."</td>
			<td>".$order["date"]."</td>
			<td class='button-column'> <a class='update'  data-toggle='tooltip'
				href='/etracks/index.php?r=order/view&id=".$order['id']."'data-original-title='Ver'>
				<i class='glyphicon glyphicon-eye-open'></i>
			</a></td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Ordenes Devueltas</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(12);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		foreach($orders as $order) {
			// var_dump($order);
			echo "<tr>
			<td>".$order["id"]."</td>
			<td>".$order["client"]."</td>
			<td>".$order["equipment"]."</td>
			<td>".$order["date"]."</td>
			<td class='button-column'> <a class='update'  data-toggle='tooltip'
				href='/etracks/index.php?r=order/view&id=".$order['id']."'data-original-title='Ver'>
				<i class='glyphicon glyphicon-eye-open'></i>
			</a></td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>