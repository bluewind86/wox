<?php
/**
 * 权限控制配置信息
 */
return array (
		'import' => array (
				'application.modules.rights.*',
				'application.modules.rights.components.*' 
		),
		'preload' => array (),
		'component' => array (
				'user'=>array(
						'class'=>'RWebUser',
						// enable cookie-based authentication
						'allowAutoLogin'=>true,
						'loginUrl'=>array('/user/login'),
				),
				'authManager' => array (
						'class' => 'RDbAuthManager',
						'connectionID' => 'db',
						'defaultRoles' => array (
								'Authenticated',
								'Guest' 
						) 
				) 
		),
		'rules' => array (),
		'module' => array (
				// 'class'=>'application.modules.rights.RightsModule',
				'install' => false 
		) 
);