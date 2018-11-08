<?php // Silnik MVC - Mariusz Sosnowski
	ob_start();
	

	define("DEBUG_MODE",1);

	if (DEBUG_MODE) {
        $executeTimeStart = microtime(true);
		error_reporting(E_ALL);
		// error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
	}else{
		error_reporting(0);
	}

	ini_set('memory_limit', '128M');
	ini_set('max_execution_time', '120');
	ini_set('post_max_size', '32M');
	ini_set('upload_max_filesize', '32M');
	// test
	
	define ('__SITE_PATH', realpath(dirname(__FILE__)));
	define ('__HOME', "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	define ('__BASE', "http://".$_SERVER['HTTP_HOST']);
	define ('__HOST_NAME', $_SERVER['HTTP_HOST']);
	define ('__HOME_NOGET',__BASE.str_replace('index.php', '', $_SERVER['REDIRECT_URL']));
	define ('__REQUEST_ID', microtime());
	define('SUBDIR', substr(rtrim($_SERVER['PHP_SELF'],'index.php'), 0, -1));
	define('HOME', __BASE.SUBDIR);

	// Dla linku http://localhost/index.php?param=value

	// __SITE_PATH		C:\xampp\htdocs
	// __HOME 			http://localhost/index.php?param=value
	// __BASE			http://localhost
	// __HOST_NAME		localhost
	// __HOME_NOGET		http://localhost
	// __REQUEST_ID		0.03884700 1509638496
	// SUBDIR			/
	// HOME 			http://localhost/




	require_once('app/includes/configDB.php');
	// Wczytywanie konfiguracji bazy danych...
	include_once('app/includes/config.php');
	// Wczytywanie konfiguracji...
	include_once('app/includes/init.php');
	// Rozpoczynanie pracy skryptu...

	if (DEBUG_MODE) {
        $executeTimeStop = microtime(true) - $executeTimeStart;
        echo '<center>'.round($executeTimeStop, 5).' s</center>';
    }
    ob_end_flush();
?>