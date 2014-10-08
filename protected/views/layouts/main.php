<?php /* @var $this Controller */ 





?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">
		<img id="logo1" src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-tools.png">
		<?php echo CHtml::encode(Yii::app()->name); ?>
		: Sistema de seguimiento de reparación de equipos</div>
<!-- 		<div id="logo1"></div> -->
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'Nueva Orden', 'url'=>array('/order/create')),
			array('label'=>'Buscar Ordenes','url'=>array('/order/admin')),
			array('label'=>'Historial','url'=>array('/order/history')),
// 			   array('label'=>'Informes', 'url'=>array('/report')),
			array('label'=>'Clientes', 'url'=>array('/client')),
			array('label'=>'Equipos', 'url'=>array('/equipment')),
			  array('label'=>'Stock', 'url'=>array('/part/admin')),

				//array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contacto', 'url'=>array('/site/contact')),
				

				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			//	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
//array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
array('url'=>array('/rights'), 'label'=>'Roles', 'visible'=>Yii::app()->getModule('user')->isAdmin()),
array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
			
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
