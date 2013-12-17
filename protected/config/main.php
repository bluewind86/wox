<?php
/**
 * This is the main Web application configuration
 * @author chenz
 * @version 0.1
 * @see 20131212
 * 
 */
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$config = array (
		'import' => array (),
		'rules' => array (),
		'components' => array (),
		'preload' => array (),
		'modules' => array (),
		// 'install' => array(
		// 'class' => 'application.modules.install.InstallModule',
		// ),
		'cache' => array (),
		'enableAssets' => false 
);

// 载入各模块的配置文件
$files = glob ( dirname ( __FILE__ ) . '/modules/*.php' );
if (! empty ( $files )) {
	foreach ( $files as $file ) {
		$name = pathinfo ( $file, PATHINFO_FILENAME );
		
		// 判断该模块文件夹是否存在
		if (! is_dir ( dirname ( dirname ( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $name )) {
			continue;
		}
		
		$moduleConfig = require $file;
		
		// 针对特殊模块特殊处理
		// ...
		
		// 合并配置文件
		if (! empty ( $moduleConfig ['import'] ))
			$config ['import'] = CMap::mergeArray ( $config ['import'], $moduleConfig ['import'] );
		if (! empty ( $moduleConfig ['rules'] ))
			$config ['rules'] = CMap::mergeArray ( $config ['rules'], $moduleConfig ['rules'] );
		if (! empty ( $moduleConfig ['component'] ))
			$config ['components'] = CMap::mergeArray ( $config ['components'], $moduleConfig ['component'] );
		if (! empty ( $moduleConfig ['preload'] ))
			$config ['preload'] = CMap::mergeArray ( $config ['preload'], $moduleConfig ['preload'] );
		if (! empty ( $moduleConfig ['module'] ))
			$config ['modules'] = CMap::mergeArray ( $config ['modules'], array (
					$name => $moduleConfig ['module'] 
			) );
		if (! empty ( $moduleConfig ['cache'] ))
			$config ['cache'] = CMap::mergeArray ( $config ['cache'], $moduleConfig ['cache'] );
	}
}

return array (
		'basePath' => dirname ( __FILE__ ) . DIRECTORY_SEPARATOR . '..',
		'name' => 'wox system',
		'defaultController' => 'site',
		'language' => 'zh_cn', //
		'theme' => 'bluewind', // 模板主题
		'charset' => 'UTF-8',
		
		// preloading 'log' component
		'preload' => CMap::mergeArray ( array (), $config ['preload'] ),
		
		// autoloading model and component classes
		'import' => CMap::mergeArray ( array (
				'application.models.*',
				'application.components.*' 
		), $config ['import'] ),
		
		'modules' => CMap::mergeArray(array(
					'gii'=>array( 'class'=>'system.gii.GiiModule', 'password'=>'123'),'ipFilters'=>array('127.0.0.1','::1'),
				), $config['modules']),
// 		'modules' => array('wox'=>'',
// 				'gii'=>array( 'class'=>'system.gii.GiiModule', 'password'=>'123'),'ipFilters'=>array('127.0.0.1','::1'),
// 				),
		// uncomment the following to enable the Gii tool
		/*
		 * 'gii'=>array( 'class'=>'system.gii.GiiModule', 'password'=>'Enter
		 * Your Password Here', // If removed, Gii defaults to localhost only.
		 * Edit carefully to taste. 'ipFilters'=>array('127.0.0.1','::1'), ),
		 */
		
		// application components
		'components' => CMap::mergeArray(
				array (
// 				'user' => array (
// 						// enable cookie-based authentication
// 						'allowAutoLogin' => true,
// 						'loginUrl'=>array('/user/login'),
// 				),
				// uncomment the following to enable URLs in path-format
				/*
				 * 'urlManager'=>array( 'urlFormat'=>'path', 'rules'=>array(
				 * '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				 * '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				 * '<controller:\w+>/<action:\w+>'=>'<controller>/<action>', ),
				 * ),
				 */
				// 'db'=>array(
				// 'connectionString' =>
				// 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
				// ),
				// uncomment the following to use a MySQL database
				'db' => array (
						'connectionString' => 'mysql:host=localhost;dbname=bluewind',
						'emulatePrepare' => true,
						'username' => 'root',
						'password' => '',
						'tablePrefix' => 'tbl_',
						'charset' => 'utf8' 
				),
				'errorHandler' => array (
						// use 'site/error' action to display errors
						'errorAction' => 'site/error' 
				),
				'log' => array (
						'class' => 'CLogRouter',
						'routes' => array (
								array (
										'class' => 'CFileLogRoute',
										'levels' => 'error, warning' 
								),
								// uncomment the following to show log messages
								// on web pages
								// 打开网页trace
								array (
										'class' => 'CWebLogRoute' 
								) 
						) 
				) 
		),$config['components']),
		
		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params' => require dirname(__FILE__) . '/params.php',
);