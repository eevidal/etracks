<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?>
		: Sistema de seguimiento de reparación de equipos</div>
		<div id="logo1"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				  array('label'=>'Ordenes', 'url'=>array('/order')),
				   array('label'=>'Informes', 'url'=>array('/report')),
				  array('label'=>'Clientes', 'url'=>array('/client')),
				 array('label'=>'Equipos', 'url'=>array('/equipment')),
				  array('label'=>'Stock', 'url'=>array('/part/admin')),

				//array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contacto', 'url'=>array('/site/contact')),
				

				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	<div id="footer"></div>
	<div id="marcas"></div>
	<div id="footer">
 		Copyright &copy; <?php echo date('Y'); ?> by Erica Vidal.
		All Rights Reserved.<br/> 
		
		<?php echo Yii::powered(); ?>
	</div>
	
	<!-- footer -->

</div><!-- page -->

</body>
</html>
