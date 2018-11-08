<?php 

class Error401Controller extends Controller
{

	public function run()
	{
		http_response_code(401);
		self::$s->assign('title', "Błąd 401 - nie masz dostępu do tej zawartości.");
		self::$s->assign('content','error401.tpl');
		self::$s->display('main.tpl');
		exit();
	}


}