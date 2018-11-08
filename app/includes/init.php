<?php // SILNIK MVC - Mariusz Sosnowski


// Funkcja ładująca klasy...
function classAutoLoader($classname)
{
	
	if(is_file(CORE_PATH.$classname.'.class.php'))
	{
		require_once CORE_PATH.$classname.'.class.php';
		return true;
	}
	elseif(is_dir(CORE_PATH.'/plugins/'.$classname))
	{
		if(is_file(CORE_PATH.'/plugins/'.$classname.'/'.$classname.'.class.php'))
		{
			require_once CORE_PATH.'/plugins/'.$classname.'/'.$classname.'.class.php';
			return true;
		}
	}
	elseif(is_file(CONTROLLER_PATH.$classname.'.php'))
	{
		require_once CONTROLLER_PATH.$classname.'.php';
	}
	elseif(is_dir(PLUGINS_PATH.$classname))
	{
		if(is_file(PLUGINS_PATH.$classname.'/'.$classname.'.class.php'))
		{
			require_once PLUGINS_PATH.$classname.'/'.$classname.'.class.php';
			return true;
		}
	}
	elseif(is_file(__SITE_PATH.'/app/model/'.$classname.'.class.php'))
	{
		require_once __SITE_PATH.'/app/model/'.$classname.'.class.php';
	}
	else 
	{
		//echo $classname;
		
	}

	return false;
}
// Rejestracja autoloadera...
spl_autoload_register('ClassAutoLoader');

// Lączenie z bazą danych...
DB::mySQLConnect(DB_HOST,DB_USER,DB_PASSWORD,DB_BASE);

$mailer = new Mailer;

Request::instance();

$routing = new Router;