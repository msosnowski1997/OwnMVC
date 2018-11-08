<?php 

class Error404Controller extends Controller
{

	public function run()
	{
		http_response_code(404);
		self::$s->assign('title', "Błąd 404 - nie można znaleźć ścieżki docelowej");
		self::$s->assign('content','error404.tpl');
		self::$s->display('main.tpl');
		exit();
	}


}