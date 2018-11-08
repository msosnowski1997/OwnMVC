<?php

/**
* 
*/
class Render
{
	public static $instance;

	public static function instance()
	{
		if(!isset(self::$instance))
		{

			self::$instance = new Smarty;

		}
		return self::$instance;

	}

	public function __construct()
	{

		
	}

}