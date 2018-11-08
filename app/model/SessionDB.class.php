<?php session_start();

/**
* 
*/
class SessionDB extends DB
{
	public static function setLoggedUser($data)
	{
		session_regenerate_id(true);
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['user_name'] = $data['user_name'];
		$_SESSION['user_permissions'] = $data['user_permissions'];
		$_SESSION['user_alias'] = $data['user_alias'];
	}

	public static function getFullSession()
	{
		return $_SESSION;
	}

	public static function createNewSession()
	{
		$_SESSION['user_id'] = 0;
		$_SESSION['user_name'] = "Gość";
		$_SESSION['user_permissions'] = 0;
	}

	public static function getUserPermissions()
	{
		if(empty($_SESSION['user_permissions']))
		{
			self::createNewSession();
		}
		return (int)$_SESSION['user_permissions'];
	}

	public static function getUserData()
	{
		if(empty($_SESSION['user_permissions']))
		{
			self::createNewSession();
		}
		return $_SESSION;
	}


	public static function userLogout()
	{
		session_destroy();
	}
}