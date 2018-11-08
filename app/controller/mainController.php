<?php 

class mainController extends Controller
{

	public function run()
	{
		self::$s->assign('title', "Strona główna");
		self::$s->assign('content','home.tpl');
		self::$s->display('main.tpl');
	}


}