<?php
/**
 * 控制器基类
 * @author chenz
 * @version 0.1
 * @since 2013-12-13 10:28:58
 */
class WController extends Controller
{
	public $wox;
	
	
	public function init()
	{
		parent::init();
		$this->wox = Yii::app()->getModule('wox');
	}
	
}
