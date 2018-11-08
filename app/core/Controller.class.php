<?php

class Controller
{
	static $s;

	public function __construct()
	{
		if(empty(self::$s))
		{
			self::$s = Render::instance();
			self::$s->template_dir = TEMPLATES_PATH;
			self::$s->compile_dir = CACHE_PATH."templates_c";
			self::$s->assign('resources_path', RESOURCES_PATH);
			self::$s->assign('base_site', HOME);
			self::$s->assign('user_data', SessionDB::getUserData());
			self::$s->assign('themeCSS', 'style.'.Ini::read('theme','color').'-'.Ini::read('theme','intense').'.min.css');
			self::$s->assign('themeHEADER', Ini::read('theme','header'));
			self::$s->assign('themeNAVBAR', Ini::read('theme','navbar'));
		}
	}
}