<?php
return array (
		'import' 	=> array (
				'application.modules.user.models.*',
				'application.modules.user.components.*',
				),
// 		'preload'   => array('log'),
		'component' => array(),
		'rules' 	=> array(),
		'module' 	=> array(
                'tableUsers' => 'user',
                'tableProfiles' => 'profile',
                'tableProfileFields' => 'profile_field',
		),
);