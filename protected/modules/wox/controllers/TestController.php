<?php
class TestController extends WBackController 
{
	public function filters()
	{
		return array('rights');
	}
	//允许的动作
	public function allowedActions()
	{
// 		return 'index';
	}
	
	public function actionIndex()
	{
		echo 'hahah';
	}
	
	public function actionTest()
	{
		echo 'lady gaga';
	}
}
