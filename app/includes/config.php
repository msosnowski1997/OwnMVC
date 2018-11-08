<?php // Silnik MVC - Mariusz Sosnowski
	define('DATA_PATH', __SITE_PATH.'/data/');
	
	define('CACHE_PATH', __SITE_PATH.'/cache/');
	
	//Php Ini config
	if (ini_get('post_max_size') > ini_get('upload_max_filesize')) {
		define('MAX_UPLOAD_FILE_SIZE',intval(str_replace('M', '', ini_get('upload_max_filesize')))*1000000);
	}else{
		define('MAX_UPLOAD_FILE_SIZE',intval(str_replace('M', '', ini_get('post_max_size')))*1000000);
	}

	//Paths
	define('RESOURCES_PATH', HOME.'/data/resources/');
	define('PLUGINS_PATH', DATA_PATH.'plugins/');	
	define('TEMPLATES_PATH',DATA_PATH.'view/');	
	define('BACKUPS_PATH', DATA_PATH.'backups/');	
	define('TRASH_PATH', DATA_PATH.'trash/');	
	
	define('CONTROLLER_PATH', __SITE_PATH.'/app/controller/');
	define('CORE_PATH', __SITE_PATH.'/app/core/');	
	define('CONFIG_PATH', __SITE_PATH.'/app/configs/');
	
	define('FILES_DIR', 'data/files/');

	//Others
	define('CACHE_ADMIN_RESOURCES', FALSE);	
?>