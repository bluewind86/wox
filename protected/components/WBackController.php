<?php
/**
 * 后台控制器基类
 * @author chenz
 *
 */

class WBackController extends WController 
{
	
	public function filters()
	{
		echo 'filter';
	}
	
	public function init()
	{
		echo 'init';
		parent::init();
	}
	
	public function beforeAction($action)
	{
		echo 'beforeAction';
		return parent::beforeAction($action);
	}
}