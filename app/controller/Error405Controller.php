<?php

class Error405Controller extends Controller
{
	
	public function run()
	{
		http_response_code(405);
		self::$s->assign('title', "Błąd 405 - nieprawidłowe zapytanie");
		self::$s->assign('content','error405.tpl');
		self::$s->display('main.tpl');
	}
}