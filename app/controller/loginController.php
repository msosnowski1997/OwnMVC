<?php

/**
* 
*/
class loginController extends Controller
{
	
	public function run($data = null)
	{
		if(SessionDB::getUserPermissions())
		{

			header('Location: '.__BASE);
			exit();
		}
		self::$s->assign('title', "Logowanie");
		self::$s->assign('content','login-form.tpl');

		if(!is_null($data)) self::$s->assign('response', $data);

		self::$s->display('full-page.tpl');
	}

	public function check()
	{
		if(SessionDB::getUserPermissions())
		{
			header('Location: '.HOME);
			exit();
		}
		if(isset($_POST['form_login']) && isset($_POST['form_password']))
		{
			$data = UsersDB::checkAuthBySite($_POST['form_login'],$_POST['form_password']);

			if(is_null($data['ERROR']) && $data['user_permissions'] >= 2)
			{
				SessionDB::setLoggedUser($data);
				header('Location: '.HOME);
				exit();
			}	
			else
			{
				$this->run($data);
			}	
		}
		else
		{
			$this->run();
		}
	}

	public function logout()
	{
		SessionDB::userLogout();
		header("Refresh: 3; URL=".HOME);
		self::$s->assign('title', "Wylogowywanie");
		self::$s->assign('content','message.tpl');
		self::$s->assign('message', '<p>Wylogowano. Za 3 sekundy zostaniesz przekierowany na Strone Główną</p>');
		self::$s->display('full-page.tpl');

	}
}