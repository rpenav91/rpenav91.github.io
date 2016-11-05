<?php
/**
 *
 * main.php configuration file
 *
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
// web application configuration
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name' => 'NISSI Tours',
    'preload'=>array('log','bootstrap'),

    // path aliases
    'aliases' => array(
        'bootstrap' => dirname(__FILE__) . '/../extensions/bootstrap',
    ),
    'import' => array(
        'bootstrap.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*',
        'bootstrap.behaviors.*',
		'application.models.*',
		'application.components.*',
		'application.extensions.*',        
    ),
    'theme'=>'bootstrap',
    // application behaviors    
	'modules'=>array(				
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
				'bootstrap.gii',
			),
		),
		
	),    
    'components' => array(

        'BsHtml' => array(
            'class' => 'bootstrap.helpers.BsHtml'
        ),
        'db'=>array(
            'connectionString'=>'mysql:host=localhost;dbname=test',
            'emulatePrepare'=>true,
            'username'=>'root',
            'password'=>'',
            'charset'=>'utf8',
        ),        
//        'chartjs'=>array(
//            'class' => 'chartjs.components.ChartJs'
//        ),
        'urlManager' => array(
            // uncomment the following if you have enabled Apache's Rewrite module.
            'urlFormat' => 'path',
            'showScriptName' => false,

            'rules' => array(
                // default rules
                'doc' => 'site/doc',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'user' => array(
            'allowAutoLogin' => true,
        ),

        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
    ),
    // application parameters
    'params' => array(
        'version' => ' Version 0.0.8 ',
    ),
);