<?php

/**
* 
*/
class adminController extends Controller
{
	
	public function showHome()
	{
		self::$s->assign('title', "Panel administratora");
		self::$s->assign('content1', "home.tpl");
		self::$s->display('admin/main.tpl');
	}

	public function showThemeSettings()
	{
		self::$s->assign('title', "Panel administratora");
		self::$s->assign('arrayofcolors', generate::themeColorsArray(false));
		self::$s->assign('content1', "elements/theme-settings.tpl");
		self::$s->display('admin/main.tpl');
	}
	public function setThemeSettings()
	{
		if(isset($_POST['color']) && isset($_POST['intense']))
		{
			Ini::save('theme','color',$_POST['color']);
			Ini::save('theme', 'intense', $_POST['intense']);
			echo "true";
		}
		elseif(isset($_POST['headerstyle']))
		{
			Ini::save('theme', 'header', $_POST['headerstyle']);
			echo "true";
		}
		elseif(isset($_POST['navbarstyle']))
		{
			Ini::save('theme', 'navbar', $_POST['navbarstyle']);
			echo "true";
		}
	}

	public function showUsersPage($data = null)
	{
		$this->getUsersList();

		self::$s->assign('title', "Panel administratora");
		self::$s->assign('content1', "elements/users-list-page.tpl");
		self::$s->display('admin/main.tpl');
	}

	public function getUsersList($data = null)
	{
		$usersdata = array ();
		$users = UsersDB::getUsersIdList();
		foreach ($users as $user) {
			$usersdata[] = UsersDB::getUserById($user['user_id']);
		}
		self::$s->assign('usersarray', $usersdata);
	}

	public function showMenuSettings()
	{
		self::$s->assign('title', "Panel administratora");
		self::$s->assign('content1', "elements/menu-settings.tpl");
		self::$s->display('admin/main.tpl');
	}
}