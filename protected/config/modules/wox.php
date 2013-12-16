<?php
/**
 * wox 核心配置文件
 */

return array (
		'import' 	=> array ('name'=>'chenzhen'),
		'preload'   => array('log'),
		'component' => array(),
		'rules' 	=> array(),
		'module' 	=> array(
				'class'=>'application.modules.wox.WoxModule',
				),
);