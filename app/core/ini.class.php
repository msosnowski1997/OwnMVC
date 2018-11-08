<?php

class Ini
{
	public static $configs = array();

    public static function read($bucket, $setting)
    {
        if(!isset(self::$configs[$bucket]))
    	{
    		self::load($bucket);
    	}
    	return self::$configs[$bucket][$setting];
    }

    public static function load($bucket)
    {
    	self::$configs[$bucket] = parse_ini_file(CONFIG_PATH.$bucket.".ini");
    }

    public static function save($bucket, $setting, $value)
    {
    	if(!isset(self::$configs[$bucket]))
    	{
    		self::load($bucket);
    	}
    	self::$configs[$bucket][$setting] = $value;

    	$fp = fopen(CONFIG_PATH.$bucket.".ini", "w");

    	foreach (self::$configs[$bucket] as $key => $value) 
    	{
    		fputs($fp, $key."=".$value."\n");
    	}
    	fclose($fp);
    }
}