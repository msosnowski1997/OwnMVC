<?php

/**
* 
*/
class Cache
{
	
	public static function fileExist($bucket, $key)
	{

		$key = md5($key);
		return file_exists(CACHE_PATH."system/{$bucket}-{$key}.tmp");
	} 

	public static function fileRead($bucket, $key)
	{
		$key = md5($key);
		return unserialize(file_get_contents(CACHE_PATH."system/{$bucket}-{$key}.tmp"));
	}

	public static function fileSave($bucket, $key, $data)
	{
		$key = md5($key);
		return file_put_contents(CACHE_PATH."system/{$bucket}-{$key}.tmp",serialize($data));
	}

	public static function fileCreatedTime($bucket, $key)
	{
		$key = md5($key);
		return filemtime(CACHE_PATH."system/{$bucket}-{$key}.tmp");

	}
}