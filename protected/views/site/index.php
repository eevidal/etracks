<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<!-- <h1>Bienvenido a  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1> -->

<!--<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>-->
<!--<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>-->





<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Ordenes Nuevas</h3>
  </div>
<div class="panel-body">
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(2);
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


<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-thumbs-up'></i>
	Ordenes listas</h3>
  </div>
  <div class="panel-body">
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(7);
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
				</a>
			</td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">
	<i class='glyphicon glyphicon-wrench'></i>
	Ordenes en revisión</h3>
  </div>
  <div class="panel-body">
 
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(9);
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
				</a>
			</td>
			</tr>";
		}
		?>
		</table>
	</div>

  </div>
</div>
<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">
	<i class='glyphicon glyphicon-usd'></i>
	Para presupuestar</h3>
  </div>
<div class="panel-body">
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(3);
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
				</a>
			</td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">
<i class='glyphicon glyphicon-hand-right'></i>
Presupuesto autorizado</h3>
  </div>
<div class="panel-body">
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(5);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		foreach($orders as $order) {
			// var_dump($order);glyphicon glyphicon-eye-open
			echo "<tr>
			<td>".$order["id"]."</td>
			<td>".$order["client"]."</td>
			<td>".$order["equipment"]."</td>
			<td>".$order["date"]."</td>
			<td class='button-column'> <a class='update'  data-toggle='tooltip'
				href='/etracks/index.php?r=order/view&id=".$order['id']."'data-original-title='Ver'>
				<i class='glyphicon glyphicon-eye-open'></i>
				</a>
			</td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
<i class='glyphicon glyphicon-phone-alt'></i>
Presupuestadas y esperando confirmación</h3>
  </div>
<div class="panel-body">
	<?php 
	$model=new Order();
	$orders=$model->SearchByStatus(4);
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
				</a>
			</td>	
			</tr>";
		}
		?>
		</table>
	</div>
 </div>
</div>
<!--
<p>Por cualquier duda recurra al manual de docuamentación
 <a href="http://www.yiiframework.com/doc/">documentation</a>.-->

