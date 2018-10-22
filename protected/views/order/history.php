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

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Órdenes de equipos alquilados</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(16);
	?>
	<div  class="grid-view">
 		<table class="items table table-striped table-bordered table-condensed"> 
		<?php
		$p=array_shift($orders);

		$arrayDataProvider=new CArrayDataProvider($orders, array(
			
 		'id'=>'id',
		'sort'=>array(
			'attributes'=>array(
			'client', 'date',
			),
		),
		'pagination'=>array(
			
			'pageSize'=>5,
			'currentPage'=>0,
			),
		)); 			
			
		$columns=array(
				array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
				array('name'=>'client', 'header'=>'Cliente'),
				array('name'=>'equipment', 'header'=>'Equipo'),
				array('name'=>'technician', 'header'=>'TecnicoR'),
				array('name'=>'technician2', 'header'=>'Tecnico'),
				array('name'=>'date', 'header'=>'Fecha'),
				array( 'header'=>'ver',
					'class'=>'booster.widgets.TbButtonColumn',
					'template'=>'{view}',

					'buttons'=>array(       
				
					'view' => array(
						 'label'=>'Ver',
// 						'visible'=>true,
// 						'icon'=>'plus',
						'url'=>'Yii::app()->controller->createUrl("order/view", array("id"=>"$data[id]"))',
						 'options'=>array( 'class'=>'btn btn btn-small',),
// 						'value' =>'CHtml::link($columns->id, Yii::app()->createUrl("order/view", array("id"=>$columns->id)))',
                                ),
                                
                        ),
                ),      

				);
		$this->widget('booster.widgets.TbGridView',array(
//  			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$arrayDataProvider,
			'filter'=>null,
			'template' => "{items}",
			'template' => "{summary}{items}{pager}",
			'enablePagination'=>true,
			'columns'=>$columns,
			'pager' => array('class' => 'booster.widgets.TbPager',
				'displayFirstAndLast' => true,
				'htmlOptions'=>array('style'=>'display:inline-block; text-decoration:none'),
				),
			'enablePagination'=> true,	
				
			));
		?>
		
		
 		</table> 
	</div>
 </div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Órdenes de equipos para alquiler</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(14);
	?>
	<div  class="grid-view">
 		<table class="items table table-striped table-bordered table-condensed"> 
		<?php
		$p=array_shift($orders);

		$arrayDataProvider=new CArrayDataProvider($orders, array(
			
 		'id'=>'id',
		'sort'=>array(
			'attributes'=>array(
			'client', 'date',
			),
		),
		'pagination'=>array(
			
			'pageSize'=>5,
			'currentPage'=>0,
			),
		)); 			
			
		$columns=array(
				array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
				array('name'=>'client', 'header'=>'Cliente'),
				array('name'=>'equipment', 'header'=>'Equipo'),
				array('name'=>'technician', 'header'=>'TecnicoR'),
				array('name'=>'technician2', 'header'=>'Tecnico'),
				array('name'=>'date', 'header'=>'Fecha'),
				array( 'header'=>'ver',
					'class'=>'booster.widgets.TbButtonColumn',
					'template'=>'{view}',

					'buttons'=>array(       
				
					'view' => array(
						 'label'=>'Ver',
// 						'visible'=>true,
// 						'icon'=>'plus',
						'url'=>'Yii::app()->controller->createUrl("order/view", array("id"=>"$data[id]"))',
						 'options'=>array( 'class'=>'btn btn btn-small',),
// 						'value' =>'CHtml::link($columns->id, Yii::app()->createUrl("order/view", array("id"=>$columns->id)))',
                                ),
                                
                        ),
                ),      

				);
		$this->widget('booster.widgets.TbGridView',array(
//  			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$arrayDataProvider,
			'filter'=>null,
			'template' => "{items}",
			'template' => "{summary}{items}{pager}",
			'enablePagination'=>true,
			'columns'=>$columns,
			'pager' => array('class' => 'booster.widgets.TbPager',
				'displayFirstAndLast' => true,
				'htmlOptions'=>array('style'=>'display:inline-block; text-decoration:none'),
				),
			'enablePagination'=> true,	
				
			));
		?>
		
		
 		</table> 
	</div>
 </div>




<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Órdenes de equipos para scrap</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(15);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		$arrayDataProvider2=new CArrayDataProvider($orders, array(
			
 		'id'=>'id',
		'sort'=>array(
			'attributes'=>array(
			'client', 'date',
			),
		),
		'pagination'=>array(
			
			'pageSize'=>5,
			'currentPage'=>0,
			),
		)); 			
			
		$columns=array(
				array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
				array('name'=>'client', 'header'=>'Cliente'),
				array('name'=>'equipment', 'header'=>'Equipo'),
				array('name'=>'date', 'header'=>'Fecha'),
				array( 'header'=>'ver',
					'class'=>'booster.widgets.TbButtonColumn',
					'template'=>'{view}',

					'buttons'=>array(       
				
					'view' => array(

						'url'=>'Yii::app()->controller->createUrl("order/view", array("id"=>"$data[id]"))',
						 'options'=>array( 'class'=>'btn btn btn-small',),
// 						'value' =>'CHtml::link($columns->id, Yii::app()->createUrl("order/view", array("id"=>$columns->id)))',
                                ),
                                
                        ),
                ),      

				);
		$this->widget('booster.widgets.TbGridView',array(
// 			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$arrayDataProvider2,
			'filter'=>null,
			'template' => "{items}",
			'template' => "{summary}{items}{pager}",
			'enablePagination'=>true,
			'columns'=>$columns,
			'pager' => array('class' => 'booster.widgets.TbPager',
				'displayFirstAndLast' => true,),
			'enablePagination'=> true,	
				
			));
		?>
		</table>
	</div>
 </div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Órdenes de equipos entregados</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(8);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		$arrayDataProvider2=new CArrayDataProvider($orders, array(
			
 		'id'=>'id',
		'sort'=>array(
			'attributes'=>array(
			'client', 'date',
			),
		),
		'pagination'=>array(
			
			'pageSize'=>5,
			'currentPage'=>0,
			),
		)); 			
			
		$columns=array(
				array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
				array('name'=>'client', 'header'=>'Cliente'),
				array('name'=>'equipment', 'header'=>'Equipo'),
				array('name'=>'date', 'header'=>'Fecha'),
				array( 'header'=>'ver',
					'class'=>'booster.widgets.TbButtonColumn',
					'template'=>'{view}',

					'buttons'=>array(       
				
					'view' => array(

						'url'=>'Yii::app()->controller->createUrl("order/view", array("id"=>"$data[id]"))',
						 'options'=>array( 'class'=>'btn btn btn-small',),
// 						'value' =>'CHtml::link($columns->id, Yii::app()->createUrl("order/view", array("id"=>$columns->id)))',
                                ),
                                
                        ),
                ),      

				);
		$this->widget('booster.widgets.TbGridView',array(
// 			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$arrayDataProvider2,
			'filter'=>null,
			'template' => "{items}",
			'template' => "{summary}{items}{pager}",
			'enablePagination'=>true,
			'columns'=>$columns,
			'pager' => array('class' => 'booster.widgets.TbPager',
				'displayFirstAndLast' => true,),
			'enablePagination'=> true,	
				
			));
		?>
		</table>
	</div>
 </div>

 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">	<i class='glyphicon glyphicon-pushpin'></i>
	Órdenes de equipos devueltos</h3>
  </div>
<div class="panel-body">
	<?php 
	
	$orders=$model->SearchByStatus(12);
	?>
	<div  class="grid-view">
		<table class="items table table-striped table-bordered table-condensed">
		<?php
		$p=array_shift($orders);
		$arrayDataProvider2=new CArrayDataProvider($orders, array(
			
 		'id'=>'id',
		'sort'=>array(
			'attributes'=>array(
			'client', 'date',
			),
		),
		'pagination'=>array(
			
			'pageSize'=>5,
			'currentPage'=>0,
			),
		)); 			
			
		$columns=array(
				array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
				array('name'=>'client', 'header'=>'Cliente'),
				array('name'=>'equipment', 'header'=>'Equipo'),
				array('name'=>'date', 'header'=>'Fecha'),
				array( 'header'=>'ver',
					'class'=>'booster.widgets.TbButtonColumn',
					'template'=>'{view}',

					'buttons'=>array(       
				
					'view' => array(

						'url'=>'Yii::app()->controller->createUrl("order/view", array("id"=>"$data[id]"))',
						 'options'=>array( 'class'=>'btn btn btn-small',),
// 						'value' =>'CHtml::link($columns->id, Yii::app()->createUrl("order/view", array("id"=>$columns->id)))',
                                ),
                                
                        ),
                ),      

				);
		$this->widget('booster.widgets.TbGridView',array(
// 			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$arrayDataProvider2,
			'filter'=>null,
			'template' => "{items}",
			'template' => "{summary}{items}{pager}",
			'enablePagination'=>true,
			'columns'=>$columns,
			'pager' => array('class' => 'booster.widgets.TbPager',
				'displayFirstAndLast' => true,),
			'enablePagination'=> true,	
				
			));
		?>
		</table>
	</div>
 </div>