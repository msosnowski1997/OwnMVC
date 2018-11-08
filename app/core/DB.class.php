<?php // SILNIK MVC - Mariusz Sosnowski
Class DB
{
	static $db;

	static function mySQLConnect($host, $user, $password, $base)
	{
		try
		{
			self::$db = new PDO('mysql:host='.$host.';dbname='.$base, $user, $password);
		}
		catch(Exception $e)
		{
			die("Błąd połączenia z bazą danych: " . $e->getMessage());
		}
	}
}