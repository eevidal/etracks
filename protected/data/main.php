<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('ext', dirname(__FILE__).'/../extensions');

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('booster', dirname(__FILE__).'/../extensions/booster');
//Yii::setPathOfAlias('auth', dirname(__FILE__).'/../extensions/auth');

Yii::setPathOfAlias('srbac', dirname(__FILE__).'/../modules/srbac');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Etracks',
	
	'language' => 'es',

	// preloading 'log' component
	'preload'=>array('log', 'bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
  		'application.modules.rights.*',
  		'application.modules.rights.components.*',
		'application.modules.srbac.components.*',	
		'application.modules.srbac.controllers.SBaseController',


	        /*'application.models.*',*/
        	//'application.components.*',
         	'application.modules.user.models.*',
       	 	'application.modules.user.components.*'
 //       	'application.modules.auth.*',
   //     	'application.modules.auth.components.*',
    
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'pass',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','192.168.75.105','::1'),
			'generatorPaths'=>array(
                		'booster.gii',
           		 ),
           	),
           	'user'=>array(
			# encrypting method (php hash function)
			'hash' => 'md5',
			# send activation email
			'sendActivationMail' => true,
			# allow access for non-activated users
			'loginNotActiv' => false,
			# activate user on registration (only sendActivationMail = false)
			'activeAfterRegister' => false,
			# automatically login from registration
			'autoLogin' => true,
			# registration path
			'registrationUrl' => array('/user/registration'),
			# recovery password path
			'recoveryUrl' => array('/user/recovery'),
			# login form path
			'loginUrl' => array('/user/login'),
			# page after login
			'returnUrl' => array('/user/profile'),
			# page after logout
			'returnLogoutUrl' => array('/user/login'),
			'tableUsers' => 'users',
		),
           	
           	
           	
		'srbac' => array(
			'userclass'=>'Users', //default: User
			'userid'=>'id', //default: userid
			'username'=>'username', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>true, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Authority', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>
			'application.views.layouts.main', //default: application.views.layouts.main,
			//must be an existing alias
			'notAuthorizedView'=> 'srbac.views.authitem.unauthorized', // default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed'=>array(
			//default: array()
				'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
				'SiteError', 'SiteContact'),
			'userActions'=>array('Show','View','List'), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10
			'imagesPath' => 'srbac.images', // default: srbac.images
			'imagesPack'=>'noia', //default: noia
			'iconText'=>true, // default : false
			'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
			//must be an existing alias
			'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			//must be an existing alias
			'showHeader'=>true, // default: false
			'showFooter'=>true, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			// must be an existing alias
		),
		
		'rights'=>array(
			'install'=>false,
			'superuserName'=>'Admin',
		),


	
),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'RWebUser',
			'loginUrl'=>array('/user/login'),
			


		),

		'authManager'=>array(
				'class'=>'RDbAuthManager',
				'assignmentTable'=>'authassignment',
				'itemTable'=>'authitem',
				'rightsTable'=>'rights',
				'itemChildTable'=>'authitemchild',
				
		),

	
		'bootstrap'=>array(
//            		'class'=>'bootstrap.components.Bootstrap',
			 'class' => 'booster.components.Booster'

       		 ),

		'db'=>array(
			'class'=>'CDbConnection',
			'connectionString' => 'pgsql:host=localhost;dbname=etracks',
            		'username' => 'etracks',
            		'password' => 'etracks',
            		'charset' => 'utf8',
            		'tablePrefix'=>'',
        	),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					//'class'=>'CFileLogRoute',
					//'levels'=>'error, warning',
					'class' => 'ext.phpconsole.PhpConsoleLogRoute',
				),

			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
