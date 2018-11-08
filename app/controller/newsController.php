<?php

class newsController extends Controller
{

    public function showGlobalNews()
    {
        self::$s->assign('title', "Strona główna");
		self::$s->assign('content','full-news.tpl');
		self::$s->display('main.tpl');
    }
}