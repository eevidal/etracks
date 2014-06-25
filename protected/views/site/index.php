<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<!--<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>-->
<!--<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>-->
<?php
$this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'Nuevos Ingresos',
    	'context' => 'primary',
        'headerIcon' => 'home',
        'content' => ''
    )
);
$this->widget(
		'booster.widgets.TbPanel',
		array(
				'title' => 'Listos',
				'context' => 'success',
				'headerIcon' => 'home',
				'content' => ''
		)
);
$this->widget(
		'booster.widgets.TbPanel',
		array(
				'title' => 'En revisión',
				'context' => 'info',
				'headerIcon' => 'home',
				'content' => ''
		)
);
$this->widget(
		'booster.widgets.TbPanel',
		array(
				'title' => 'Para presupuestar',
				'context' => 'warning',
				'headerIcon' => 'home',
				'content' => ''
		)
);
$this->widget(
		'booster.widgets.TbPanel',
		array(
				'title' => 'Autorizadas y pendientes',
				'context' => 'danger',
				'headerIcon' => 'home',
				'content' => ''
		)
);?>

<!--
<p>Por cualquier duda recurra al manual de docuamentación
 <a href="http://www.yiiframework.com/doc/">documentation</a>.-->

